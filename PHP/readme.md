WAMP 설치하기

1. https://bitnami.com/stack/wamp 다운받기

설치 완료 화면
 - go to application : 연결이 잘되었으면 localhost 에 비트나미 화면이 나온다
                       C:\Bitnami\wampstack-5.6.27-0\apache2\htdocs\index 파일.
 - open phpMyadmin : 
 - openapplication folder : 

C:\Bitnami\wampstack-5.6.27-0\apache2\conf\extra\httpd_vhost  여기에서 localhost 경로를 바꿔줘요.


2.코드이그나이터 다운받기
https://codeigniter.com/ 

3.vhost setting
 - apache2\conf\httpd.comf 에 포트번호 추가
 - conf/bitnami/bitnami.conf 에 80포트 복사해서 VirtualHost 추가
 - Apache Web Server 재시작 

코드이그나이터 setting



3. 



 - DB : 코드이그나이터 폴더/application/config/database 파일에 DB정보를 입력해주면 DB연동 끝!