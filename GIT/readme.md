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

#git shell에서 sublime 실행하기.

 - 방법
os는 콘솔 입력을 받으면 실행파일로 간주하고 미리 저장된 path에서 해당 실행파일을 찾게되어있다.
 - sublime text의 위치 확인
 - 내컴퓨터>(우클릭)속성>고급설정>고급tab>환경변수>Path(더블클릭)>새로만들기 : sublime text의 경로 저장
 - shell 재시작