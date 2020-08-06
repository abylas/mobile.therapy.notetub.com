#!/bin/bash
#feature-name - name of this feature branch - in format - "fxxxxx" - example, f91301, means feature branch 9.13.0.1
#tag-version-number - in format  "v-9.13.0.1" , for the tags
# tag-description - in quotes. probably, simpl,e description for the tags

#Usage: local feature-name tag-version-number TAG-DESCRIPTION

# Command below in comments is for my windows machine. for creating a Windows batch file.
#"C:\Program Files (x86)\Microsoft Visual Studio\Shared\Anaconda3_64\python.exe" local.py $1 $2 $3

python local.py $1 $2 $3