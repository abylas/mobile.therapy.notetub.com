::Usage: local feature-name tag-version-number TAG-DESCRIPTION

:: feature-name - name of this feature branch - in format - "fxxxxx" - example, f91301, means feature branch 9.13.0.1
:: tag-version-number - in format  "v-9.13.0.1" , for the tags
:: tag-description - in quotes. probably, simpl,e description for the tags


:: Command below in comments is for my windows machine. for creating a Windows batch file.
::"C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe" local.py $1 $2 $3


@ECHO OFF
:: This batch file helps merge your current feature breanch to develop, then master, then reease, and then tags it. you still need to pull wherever you need it. and switch back to a new branch. and upgrade your version number
TITLE Git Feature Branch Merge and Tag
ECHO Please wait... Working on git commands.
:: Section 1: OS information.
ECHO ============================
ECHO Processing Git commands, by calling on python script local.py
ECHO ============================




"C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe" local.py %1 %2 %3
PAUSE