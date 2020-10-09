 git init                     本地仓库初始化

 echo 1>test.txt              创建文件并写入数据

 git add *                    所有文件加入存储区

 git commit - m 'test'        提交到仓库


git remote add origin https://github.com/YangKH/17RG01_BS.git   本地仓库和远程仓库关联

git pull origin master      // 把本地仓库的变化连接到远程仓库主分支

git checkout -b GROUP_01    //创建并转到本地分支 GROUP_01

echo 123>group_01.txt       //在分支创建文件并输入数据

git add *                    所有文件加入存储区

git commit - m 'test'        提交到分支

git push origin GROUP_01     把分支推到远程 需要GitThub验证账号密码




git branch -a                查看所有分支，本地分支和远程分支

git push origin -d GROUP_01  删除远程分支GROUP_01 
