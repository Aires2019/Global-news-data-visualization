import os
import sys
import datetime as dt
import pandas as pd

Folder_Path='./totaldata/202207/mentions'
SaveFile_Path='E:/暑假小学期/代码/mergedata/mentions'
SaveFile_Name='metions_202207.csv'
os.chdir(Folder_Path)
file_list=os.listdir()
df=pd.read_csv(file_list[0],sep='\t',header=None)

df.columns = [
            'GlobalEventID',
            'EventTimeDate',
            'MentionTimeDate',
            'MentionType',
            'MentionSourceName',
            'MentionIdentifier',
            'SentenceID',
            'Actor1CharOffset',
            'Actor2CharOffset',
            'ActionCharOffset',
            'InRawText',
            'Confidence',
            'MentionDocLen',
            'MentionDocTone',
            'MentionDocTranslationInfo',
            'Extras'
        ]

df.to_csv(SaveFile_Path+"/"+SaveFile_Name,encoding="utf_8_sig",index=False)
for i in range(1,len(file_list)):
    df=pd.read_csv(file_list[i],sep='\t')
    df.to_csv(SaveFile_Path+"/"+SaveFile_Name,encoding="utf_8_sig",index=False,header=None,mode='a+')
    sys.stdout.write("\r已合并：%.2f%%"%float((i/len(file_list))*100))
    sys.stdout.flush()