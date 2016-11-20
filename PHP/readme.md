WAMP 설치하기

1. https://bitnami.com/stack/wamp 다운받기
(설치 과정중에 비밀번호 입력이 나오는데 잘 기억해두세요. 
나중에 워크벤치로 mysqlDB접속할때 쓰이는 비밀번호입니다. )

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



4.php DB연동하기


1) mysql & workbench 설치


2) 코드이그나이터 설정

 - 연결할 DB정보 입력
	application> config>database : hostname, username, password, database(스키마이름)
 
 - 자동로드에 '데이터베이스' 추가
 	application>config>autoload : autoload [libraries] = array('database') 
					autoload [model] = array('모델명') 해주면 모든 컨트롤러에서 자동으로 접근가능해짐.	


#controller에서 변수 보내기

controller-> view로 파라미터를 넘겨서 화면에 출력하는 방법.

달성
url : index.php/member/view/6

$param = $this->uri->segment(3); //(위 url에서 6을 가져옴) $data['content'] = $this->member_m->fetch_content($param); $this -> load -> view('admin/admin/view_v',$data);

view에서 변수 확인 (var_dump($array)함수로 확인가능)

var_dump 결과
```
array(1) { [0]=> object(stdClass)#23 (5) { ["SEQ"]=> string(1) "6" ["TITLE"]=> string(8) "test1234" ["WRITER"]=> string(8) "test1234" ["CONTENTS"]=> string(8) "test1234" ["CREATE_DT"]=> string(19) "2016-11-18 10:55:30" } }
```

출력을 위해 아래와 같이 했으나 에러 발생 <?= $content[0]->["TITLE"]?>

Message: Cannot use object of type stdClass as array

		