# dev_ariel
Development Documentation for Ariel

0.터미널열기


1. 저장소 다운받기
git clone https://github.com/아이디/저장소명
```
git clone https://github.com/myhyper/dev_ariel
```

2. 다운받아진 폴더 확인
```
ls
```
(dev_ariel가 있는지 확인한다.. dev_ariel=프로젝트명)

3. 들어간다.
cd 폴더명
```
cd dev_ariel
```

4. 다운받은 저장소안에있는 파일목록확인하기
```
ls .
```

5.

 1)파일이 없을때

새파일을 만든다.
touch 파일명
```
touch abcd
```

		//새폴더를 만든다 - mkdir

 2) 파일이 있을때 
파일을 지운다.
rm 파일명 
```
rm abcd
```

6. 서버에 올린다.
```
git add .
git commit -am "msg"
git push
```

7. 웹에서 확인하다.

8. 다운받은 저장소는 임시파일이므로 지운다.
cd..(상위폴더 이동)
rm -rf 폴더명(=프로젝트명)
            rm 파일명
```
rm dev_ariel
```

9. 다 지웠는지 확인한다.
```
ls
```

10. 터미널 종료


