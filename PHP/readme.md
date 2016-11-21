# WAMP 설치하기


1.php-apache 연동하기 (wamp 설치)

 1) http://www.wampserver.com/en/ 에서 다운로드.

C:\wamp64 경로에 만들기


(다른 서버가 실행되고있으면 제대로 실행이 안될수있으니 다른 서버는 꺼주세요.
cmd 관리자 권한 실행 -> httpd -k stop 입력
)


 2) httpd.conf 설정
경로   C:\wamp64\bin\apache\apache2.4.23\conf/httpd.conf
 파일의 73번째 줄 근처에 Listen [::0]:80 을 찾으세요.
바로아래에 원하는 포트번호로 Listen [::0]:8080 이렇게 만들어줍니다.

 3)vhost 경로 설정
경로   C:\wamp64\bin\apache\apache2.4.23\conf\extra/httpd-vhost.conf 
```
<VirtualHost *:80>
	ServerName localhost
	DocumentRoot c:/wamp64/www
	<Directory  "c:/wamp64/www/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```

위 내용을 똑같이 복붙해서 원하는 앞서 지정한 포트번호를 입력해주고, 원하는 경로로 수정해줍니다.

```
<VirtualHost *:8080>
	ServerName localhost
	DocumentRoot C:\Users\USER\test\dev_ariel\PHP\CodeIgniter_test
	<Directory  "C:\Users\USER\test\dev_ariel\PHP\CodeIgniter_test">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```

2.코드이그나이터 다운받기
https://codeigniter.com/ 

3.vhost setting
 - apache2\conf\httpd.comf 에 포트번호 추가
 - conf/bitnami/bitnami.conf 에 80포트 복사해서 VirtualHost 추가
 - Apache Web Server 재시작 

코드이그나이터 setting



4.php DB연동하기


1) mysql & workbench 설치


2) 코드이그나이터 설정

 - 연결할 DB정보 입력
	application> config>database : hostname, username, password, database(스키마이름)
 
 - 자동로드에 '데이터베이스' 추가
 	application>config>autoload : autoload [libraries] = array('database') 
					autoload [model] = array('모델명') 해주면 모든 컨트롤러에서 자동으로 접근가능해짐.	


#controller에서 변수 보내기

 - controller-> view로 파라미터를 넘겨서 화면에 출력하는 방법.

달성
url : index.php/member/view/6

$param = $this->uri->segment(3); //(위 url에서 6을 가져옴) $data['content'] = $this->member_m->fetch_content($param); $this -> load -> view('admin/admin/view_v',$data);

 - view에서 변수 확인 (var_dump($array)함수로 확인가능)

var_dump 결과
```
array(1) { [0]=> object(stdClass)#23 (5) { ["SEQ"]=> string(1) "6" ["TITLE"]=> string(8) "test1234" ["WRITER"]=> string(8) "test1234" ["CONTENTS"]=> string(8) "test1234" ["CREATE_DT"]=> string(19) "2016-11-18 10:55:30" } }
```

출력을 위해 아래와 같이 했으나 에러 발생 <?= $content[0]->["TITLE"]?>

Message: Cannot use object of type stdClass as array

 - 현상태(수정중)

출력을 위해 아래와 같이 했으나 에러 발생
<?= $content[0]->["TITLE"]?>

Message: Cannot use object of type stdClass as array
