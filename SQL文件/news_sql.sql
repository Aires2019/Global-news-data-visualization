-- 预处理 删除字段
SELECT COUNT(GLOBALEVENTID) FROM export
DELETE FROM export WHERE MonthYear<202201
ALTER TABLE export DROP COLUMN Actor1KnownGroupCode;
ALTER TABLE export DROP COLUMN Actor1EthnicCode;
ALTER TABLE export DROP COLUMN Actor1Religion1Code;
ALTER TABLE export DROP COLUMN Actor1Religion2Code;
ALTER TABLE export DROP COLUMN Actor1Type2Code;
ALTER TABLE export DROP COLUMN Actor1Type3Code;
ALTER TABLE export DROP COLUMN Actor2KnownGroupCode;
ALTER TABLE export DROP COLUMN Actor2EthnicCode;
ALTER TABLE export DROP COLUMN Actor2Religion1Code;
ALTER TABLE export DROP COLUMN Actor2Religion2Code;
ALTER TABLE export DROP COLUMN Actor2Type2Code;
ALTER TABLE export DROP COLUMN Actor2Type3Code;


-- 筛选俄乌冲突
create TABLE export_rus_ukr like export;
INSERT INTO export_rus_ukr SELECT * 
FROM
	export 
WHERE
	(Actor1CountryCode = "RUS" AND Actor2CountryCode = "UKR" ) 
	OR ( Actor1CountryCode = "UKR" AND Actor2CountryCode = "RUS" )
	OR (SOURCEURL LIKE '%Russia%' and SOURCEURL LIKE '%Ukrain%');


-- 简单查询	
-- 1、新闻总数
SELECT count(GLOBALEVENTID) FROM export
-- 2、俄乌冲突总数
SELECT count(GLOBALEVENTID) FROM export_rus_ukr
-- 3、俄乌两国新闻数
SELECT Count(GLOBALEVENTID) as all_ FROM export WHERE Actor1CountryCode='RUS' OR Actor1CountryCode='UKR'
-- 4、每月新闻
select monthyear,count(GLOBALEVENTID) from export_rus_ukr 
group by MonthYear ORDER BY MonthYear;
-- 5、俄乌冲突情绪占比
CREATE VIEW quadclass_count AS 
SELECT
	monthyear,
	IF(QuadClass <= 2,0,1) as quadclass,
	count(GLOBALEVENTID) as count_event
FROM
	export_rus_ukr 
GROUP BY
	MonthYear, QuadClass 
ORDER BY
	MonthYear, QuadClass




-- ////////俄乌冲突可视化

-- 创建视图
create view AvgTone_mod AS
select GLOBALEVENTID, MonthYear, Actor1CountryCode as Country, quadclass, GoldsteinScale, AvgTone, SOURCEURL
FROM export_rus_ukr
where Actor1CountryCode is not null;
-- 更新视图
update AvgTone_mod  
set AvgTone = (  
case  
  when AvgTone > 0 then 1
  when AvgTone = 0 then 0 
  when AvgTone < 0 then -1
end);  

update AvgTone_mod  
set quadclass = (  
case  
  when quadclass<=2 then 0     
  when quadclass>2 then 1 
end); 

-- 视图字段 AvgTone_mod: GLOBALEVENTID, MonthYear,  Country, quadclass, GoldsteinScale, AvgTone, SOURCEURL

-- 1、每月乌克兰、俄罗斯新闻数
select MonthYear,count(GLOBALEVENTID) as count_event
FROM avgtone_mod
GROUP BY MonthYear;

-- 2、每月不同情绪的新闻数
select MonthYear, AvgTone, Count(GLOBALEVENTID) as count_event
FROM avgtone_mod
GROUP BY MonthYear, AvgTone
ORDER BY AvgTone,MonthYear;

-- 3、总体不同情绪的新闻占比
SELECT p.AvgTone, p.count_event/s.sum
FROM 
		(select AvgTone, Count(GLOBALEVENTID) as count_event
		FROM avgtone_mod
		GROUP BY AvgTone) p,
			(select count(GLOBALEVENTID) as sum
			FROM avgtone_mod) s;
 
-- 4、每月不同情绪的新闻占比
SELECT p.MonthYear, p.AvgTone, p.count_event/s.sum
FROM 
	(select MonthYear, AvgTone, Count(GLOBALEVENTID) as count_event
		FROM avgtone_mod
		GROUP BY MonthYear, AvgTone) p,
	(select MonthYear,count(GLOBALEVENTID) as sum
		FROM avgtone_mod
		GROUP BY MonthYear) s
WHERE p.MonthYear=s.MonthYear;

-- 5、每月冲突与合作的数量
SELECT monthyear, quadclass, count(GLOBALEVENTID) as count_event
FROM AvgTone_mod 
GROUP BY QuadClass,MonthYear;

-- 6、每月冲突与合作的占比
select p.MonthYear, p.QuadClass, p.count_event/s.sum_event as per
from
		(SELECT monthyear, quadclass, count(GLOBALEVENTID) as count_event
			FROM AvgTone_mod 
			GROUP BY MonthYear, QuadClass ) p,
		(SELECT MonthYear,count(GLOBALEVENTID) as sum_event 
			from AvgTone_mod 
			GROUP BY MonthYear) s
where p.monthyear=s.MonthYear;

-- 7、每月冲突与合作、俄罗斯/乌克兰主导
SELECT m.MonthYear, m.QuadClass, m.RUS, n.UKR
FROM
	(SELECT monthyear, quadclass, count(GLOBALEVENTID) as RUS
		FROM AvgTone_mod 
		where Country = 'RUS'
		GROUP BY MonthYear, QuadClass) m,
	(SELECT monthyear, quadclass, count(GLOBALEVENTID) as UKR
		FROM AvgTone_mod 
		where Country = 'UKR'
		GROUP BY MonthYear, QuadClass) n;

-- 8、各国有关俄乌冲突新闻的数量
select uncode.Countrychn
		,count(GLOBALEVENTID) as count_country
FROM AvgTone_mod,uncode 
where AvgTone_mod.country=uncode.UNCode
GROUP BY AvgTone_mod.Country
ORDER BY count_country DESC;

-- 9、各国冲突与合作的总数
SELECT QuadClass, Count(GLOBALEVENTID) as n
FROM export
GROUP BY QuadClass
ORDER BY QuadClass;




-- ////////全球冲突与合作可视化
-- 创建视图
create view World_AvgTone_mod AS
select GLOBALEVENTID, MonthYear, Actor1CountryCode as Country, quadclass, GoldsteinScale, AvgTone, SOURCEURL
FROM export
where Actor1CountryCode is not null
-- 更新视图
update World_AvgTone_mod  
set AvgTone = (  
case  
  when AvgTone > 0 then 1
  when AvgTone = 0 then 0 
  when AvgTone < 0 then -1
end);  

update World_AvgTone_mod  
set quadclass = (  
case  
  when quadclass<=2 then 0     
  when quadclass>2 then 1 
end); 

-- 10、每月全球冲突与合作的数量 
SELECT monthyear, quadclass, count(GLOBALEVENTID) as count_event
FROM world_AvgTone_mod 
GROUP BY MonthYear, QuadClass


-- //// 事件类型可视化
-- 11、 event root code
SELECT EventRootCode,count(GLOBALEVENTID) as cou ,avg(GoldsteinScale) as gol
FROM export_rus_ukr 
GROUP BY EventRootCode ORDER BY cou DESC
limit 10
-- 4	286712  磋商
-- 1	167442  公开声明
-- 19	136851	战斗
-- 11	99587		反对
-- 3	92532		表达合作意愿
-- 2	83354		呼吁
-- 5	82151		外交合作
-- 8	53225		屈服
-- 13	48502		威胁
-- 7	43006		援助

-- 12、event随时间的变化
SELECT MonthYear,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE EventRootCode=4
GROUP BY MonthYear
-- 22698, 63063 ,92909 ,41500 ,31067 ,21681 ,13794

SELECT MonthYear,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE EventRootCode=1
GROUP BY MonthYear
-- 11418,36490 ,51633 ,26370 ,20508 ,13126 ,7897

SELECT MonthYear,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE EventRootCode=19
GROUP BY MonthYear
-- 3553, 20945, 41914, 25878, 18893, 15361, 10307


-- 13、event CODE 
SELECT eventcode,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE EventRootCode=4
GROUP BY eventcode
ORDER BY cou DESC
-- 40	89238
-- 42	64652
-- 46	62657
-- 43	58948
-- 44	4288
-- 41	3683
-- 45	3246

SELECT eventcode,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE EventRootCode=1
GROUP BY eventcode
ORDER BY cou DESC
-- 10	88275
-- 12	25539
-- 13	25197
-- 14	12184
-- 16	5349
-- 15	3219
-- 11	2762
-- 17	2704
-- 18	1737
-- 19	476

SELECT eventcode,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE EventRootCode=19
GROUP BY eventcode
ORDER BY cou DESC
-- 190	77265
-- 193	17765
-- 194	17661
-- 192	17206
-- 195	6101
-- 191	612
-- 196	241

-- 14、两国事件
SELECT EventRootCode,Actor1CountryCode,count(GLOBALEVENTID) as cou
FROM export_rus_ukr
WHERE  (Actor1CountryCode='RUS' or Actor1CountryCode='UKR')
-- (EventRootCode=19 or EventRootCode=1 or EventRootCode=4) and
GROUP BY EventRootCode,Actor1CountryCode
ORDER BY Actor1CountryCode,cou desc 
-- 65578, 46162, 57400, 29053, 21882,19357, 21730, 18935, 16338, 10782
-- 72731, 46596, 45971, 31395, 21163, 24607, 20333, 16819, 13643, 10101

















