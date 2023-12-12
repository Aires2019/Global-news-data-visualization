import os
import shutil
for i in range(4,8):
    src_folder="./totaldata/20220"+str(i)
    tar_folder="./totaldata/20220"+str(i)
    files=os.listdir(src_folder)
    for file in files:
        src_path=src_folder+'/'+file
        #print(src_path)
    for file in files:
        # 将每个文件的完整路径拼接出来
        src_path = src_folder + '/' + file

        if os.path.isfile(src_path):
            # 移动之后的文件路径
            # 将文件民按点分割 取最后一位 即是目标的路径
            tar_path = tar_folder + '/' + file.split('.')[-2]
            print(tar_path)
            # 如果文件夹不存在则创建
            if not os.path.exists(tar_path):
                os.mkdir(tar_path)
            # 移动文件
            shutil.move(src_path, tar_path)

