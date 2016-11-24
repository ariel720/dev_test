
#section1. setting

1. c9.io 가입

2. 레일즈 workspace 생성하기
create workspace >
workspace name, Description, choose template (ruby 선택) > 생성

3.cloud9 - github 연동하기.
http://lepidllama.net/blog/how-to-push-an-existing-cloud9-project-to-github/


#section2. ruby programming language

 - string 찍기 - 그냥 출력, 변수에 담기, 함수 호출


아래 콘솔에 irb입력
 - ?.class : 데이터의 형태를 보여줌
 - ?.method : 어떤 메소드를 쓸수있는지 보여줌.



 * 변수는 변수를 가리킬수없다.
first, first_also

*
 - name ="shinhee"
 - "my name is #{name}" = "my name is shinhee" (싱글쿼트에서 못씀.)


*싱글쿼트두번쓰기 (그냥 쓰면 안됨.)
'ariel said /'good morning/''


puts "name?"
name = gets.chomp
puts "age?"
age = gets.chomp : String으로 값을 입력받기때문에 숫자를 입력하려면 받은다음에 to_i 해줘야함.

puts "welcome #{name} #{age}!"



숫자


puts 20/3->몫 만나옴
puts 20.0/3 =>float 
puts 20/3.to_f =>float 

22.odd? 홀수니?
22.even?

부등호를 쓰면 boolean값 반환

rand :  랜덤숫자
rand(10) : 0~10 사이의 숫자 반환

스트링숫자를 int로 바꿀수있음.

puts "num1?"
num1 = gets.chomp
puts "num2?"
num2 = gets.chomp

puts "num1+num2 = #{num1.to_i+num2.to_i}"


def mutiply(num1,num2)
  
  num1.to_i*num2.to_i
  
end

def divide(num1,num2)
  
  num1.to_i/num2.to_i
  
end

puts "num1?"
num1 = gets.chomp

puts "num2?"
num2 = gets.chomp


puts "what do you want to do with two numbers? 1)multiply, 2)divide"
prompt = gets.chomp

if prompt=='1'
  puts "num1*num2 = #{mutiply(num1,num2)}"
elsif prompt=='2'
  puts "num1/num2 = #{divide(num1,num2)}"
end



 - 배열
 
 a=[0..10].to_a : 0~10까지 배열을 만들어라

 a.include?("shinhee") : boolean값 반환
 a.shuffle : 값 랜덤 섞기

 a<<25 : 추가
 a.push(5) : 삭제
 a.pop : 맨뒤의 배열 삭제
a.unshift : 맨 앞에 추가
a.uniq : 중복값 없이 보여줌.

a.each {|i| puts i} : 배열의 각 값을 i라는 변수에 담아서 출력.

a.select {|nun| num.odd?}
y.each {|num| print num if num.odd?}



for number in a
puts "hi"
end             : a의 번호만큼 hi를 출력하세요.(for~ end)


names = ["joe","jhon","jane"]

대문자로 찍기
names.each { |food|
puts "hello #{food.capitalize}"
}                 :do-end = {}

배열 합치기
y.join : 그냥 합치기
y.join('') : 가운데 한칸 띄우고 합치기



 - 해시
myhash = {a: 1, b: 2, c: 3, d: 4} =>{:a=>1, :b=>2,:c=>3,:d=>4 }
myhash[:name]="shinhee"  :요소 추가하기
myhash.delete(:name)="shinhee"  :요소 추가하기 (괄호 헷갈리지말기)
myhash.each {|k,v| puts "key is #{k}"}

myhash.each {|k,v| puts myhash.delete(k) v > 3 }
myhash.select {|k,v| v.odd? }



 - 루비스타일 가이드
 https://github.com//bbatsov/ruby-style-guide


연습문제
1. key: 도시이름, value : 지역번호 짝을 이루는 해시를 만들기.
2. 사용가능한 도시 이름을 나열해서 보여주기.
3.사용자가 도시이름을 입력
4.도시이름과 번호 보여주기.
5.사용자가 도시이름을 계속 찾지않을때까지 계속 돌아가는 loop 쓰기.
6.함수1:입력빋은 도시 이름으로 지역번호 찾아주는 메소드
7.함수2:도시 이름만 보여주는 메소드



dial_book={
  "a"=>"1",
  "b"=>"2",
  "c"=>"3",
  "d"=>"4",
  "e"=>"5",
  "f"=>"6"
}


def get_city_name(somehash)
  somehash.each {|k,v| puts k}
end

def get_area_code(somehash,key)
  somehash[key]
end


loop do
  puts "do you want to lookup an area code based on a city?(Y/N)"
  
  answer = gets.chomp
  if answer != "Y"
    break
  end
  
  puts "which city do you want the area code for?"
  
  get_city_name(dial_book)
  city = gets.chomp
  
  if dial_book.include?(city)
    puts "city name : #{city}, area code : #{get_area_code(dial_book,city)}"
    break
    
  else
    puts "invalid selection"
    break
  end
  
end



 - what is object oriented programming (객체지향 프로그래밍)
 : 캡슐화,추상화, 상속,다형성

```ruby
 class User
  

attr_accessor :name,email      # getter와 setter를 한방에 해결

  def initialize(name,email)
    @name = name         #instance variable : 반드시 getter를 통해서 꺼내줘야함.
    @email = email					User 전역에서 사용할수 있는 변수
  end
  
  def run
    puts "i'm running"
  end

					  def get_name
					    puts @name
					  end

					  def set_name = ()
					  	@name = name
					  end
  
end


user1 = User.new("shinhee")
puts user1.get_name

user2 = User.new()
user2.set_name = "ariel"     # setter = 표시 주의하세요.

user3 = User.new("jhon","test@test.com")
user.name = "kevin"
user.email = "wow@wow.com
puts "info : #{user.name}, #{user.email}"

```

 - 상속
 위의 User 클래스를 상속받은 객체
```ruby
 class Buyer <User
  def run
    puts "im running"
  end
end


#User를 상속받았으므로 생성하는 방법은 User생성과 같다
buyer1 = Buyer.new("test1","test1@test1.com")
buyer1.run


puts Byuer.ancestor # 조상클래스 찾아보기
=> User, Object, Kernel, BasicObject

```

 - 모듈 : 클래스와 비슷하지만 객체생성할 필요가 없어요.



module Destructable
 def destroy (obj)
    puts "destroy obj"
  end
end


Class action
include Destructable    #해당 클래스 안에서 쓸 모듈을 선언

end

 - 연습문제 : working with json 

  https://ide.c9.io/shinhee/completerubyonrailscourse
#section3. ruby on rails

# rails 시작하기.(mvc 패턴)
시작할 폴더를 만들어요.
 : mkdirt project
레일즈를 만들어요.(자동으로 필요한 파일들이 만들어져요.)
 : rails new test_app
 로컬에서 rails 실행하기
: rails s -b 0.0.0.0:3000
라우터(컨트롤러 명시)에 뭐가있는지 보기
: rake routes

git&버젼컨트롤
git --version  :버젼 확인하기
git config --global user.name "ariel720"
git config --global user.email "ariel720@naver.com"

git config --list : 접속자 정보

git rm -rf 파일명 : 파일지우기
git checkout -f : 지운 파일 되살리기

저장소를 설치하고 나면 나오는 명령어에 따라 파일을 업로드해주세요.

(깃 저장소가 없다면 git init 해서 저장소를 만드시구요~)



[heroku] (업데이트 하고 싶은 폴더 위치 안에서 )

0. heroku 사용할수 있도록 app setting 

1. heroku 설치하기
wget -O- https://toolbelt.heroku.com/install-ubuntu.sh | sh

2. 로그인하기
heroku login
메일과 비밀번호 입력

3. heroku create
새로운 저장소 만듦.

4. push 
(heroku 연동후 파일이 업데이트 되었으므로 git commit 한번 해주세용.)
나의 ssh 키정보를 업데이트 해주세요.
heroku keys:add   ......  Y 선택하면 heroku 업데이트 끝.
git push heroku master     깃헙에 업데이트 끝.

(  https://calm-springs-23492.herokuapp.com/ 하면서 나의 app이 올라가있는 주소가 나옵니다.)

5. 주소 바꾸기
heroku rename ariel-rails-test




