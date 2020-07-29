How to run local.py or it's other versions

This guide details the above

---------------
You can run local.py for one shot deployment to github 
and THEN LOGIN to production and 
do 

git pull 

and 

git pull --all tags

-------------

Be in the feature branch and complete all work and then do all this. 
(General format for all files is 

C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe local.py feature-name version-number

)

1. for local.py on WINDOWS 10, type folowing command ON COMMAND PROMT WITH ADMIN privileges.


cd c:\xampp\htdocs\ava


"C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe" local.py feature-name version-number
 
2. for other files, everything else is same, except local files names change

C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe local-1-feat-to-develop.py feature-name version-number


3. 
C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe local-2-merge-develop-n-release.py feature-name version-number


4. 

C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe local-3-merge-release-n-master.py feature-name version-number

5. 

C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe local-4-push-all-tags-n-branches.py feature-name version-number

