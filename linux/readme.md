리눅스 명령어
```
ㅡmake directory
mkdir ariel1114 
```

: change directory
```
cd 
cd . 현재위치로 감
cd .. 상위 폴더로 감
```

: 자동완성
```
Tab 
```

: 현재 위치
```
pwd 
```

:폴더내 파일목록
```
ls
```

:출력
```
echo "test"
```

:앞의 결과를 뒤에 넣는다
```
 앞>>뒤
```

:파일내용 보기
```
cat 파일명
```

파일 덮어 쓰기
```
mv -f SoruceFile TargetFile
``
1. 리눅스명령어로 php 설치 : apt -get


sudo apt-get install php7.0  		 설치
sudo apt-get install apache2		아파치서버 설치
php -v    				버젼 확인
sudo gedit /var/www/html/index.php    해당경로의 index.php파일을 열어 편집
sudo /etc/init.d/apache2 restart      서버 재실행
http://192.168.9.130/index.php		

history : 썼던 명령어.



2. 비쥬얼에디터

 - h1태그로 helloworld
 - 2 : myname i kim

vi var/www/html/index.php

i   		insert
:set number     왼쪽에 번호줄 보이기
esc		편집끝내기
:w		편집완료,저장
:q		vi 끝내기
G:커서 맨뒤로
gg:커서 맨앞으로





* 오늘의 리눅스 명령어
/etc/passwd:컴퓨터의 전체 사용자, 속한 그룹보는거

ls -alt
:현재위치의 파일에 대한 접근권한자 (root(최고권한자로 지정되어있으면 파일 접근이 안될수있어))

chown max:max 파일경로,이름
:파일의 소유권을 바꿔주기.(이름바꾸기 권한이 없으면 sudo chown max:max)


man 명령어
: 명령어에 대한 설명보기 

more : 



chmod

