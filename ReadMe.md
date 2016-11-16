깃 사용자 설정
```
git config --global user.name "ariel720"
git config --global user.email "ariel720@naver.com"
```


 - 초기 저장소 만들기
```
…or create a new repository on the command line

echo "# dev_test" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/ariel720/dev_test.git
git push -u origin master
```
 - 변경사항 반영하기
```
git add .mk
git commit -am "설명"
git push
```
