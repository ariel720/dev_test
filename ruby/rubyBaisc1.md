[ Try ruby ]
 - 숫자
 - 사칙연산 : +, *,-,/ 
 - 문자 "String"
 ```
 	"". reverse :  순서 바꾸기
 	"".length : 배열길이
 	"".*5 : 5번 반복
 ```

- 형변환
```
"".to_s : String으로
"".to_i : int 로
"".to_a : 배열로
```

- 배열
```
	A = [] : 배열선언하기
	[].max : 최댓값 찾기
""['text']='test' : 문자 찾아서 바꾸기
"".lines.to_a.reverse.join : 문자열 .한줄한줄. 배열로 만들기.순서바꾸기.하나로 합치기 
"".downcase : 소문자
"".upcase : 대문자
"".delete : 삭제
"".include? "s" : "s"라는 문자 찾기-> boolean 값으로 반환
```

- 해시
```
B = {} 
C = Hash.new(0)   //선언
:test  // value 넣기
B["TEST"] = :test  //key에 value 넣기.... B["TEST"] 입력하면 test 가 나옵니다.
B.kesys 해시의 키값 찾기
```

- Dir
```
-Dir.entries "/"  // 경로가 "/"로 시작하는 것을 찾으세요.
-Dir["/*.txt"]  //[/*.txt] 로시작하는 문서를 찾으세요 = 모든 텍스트 문서를 찾으세요.

-print File.read("")  //""파일을 읽으세요.
-FileUtils.cp('A', 'B')   // A 파일을 B위치에 복사(cp)
-File.mtime("")  //""파일의 마지막 수정일자
```
- Popup
```
-Popup.goto "http:// "  주소를 팝업
-Popup.make {
		 h1 "My Links"    //문자찍기
 		link "Go to Bing", "http://bing.com"  //링크만들기
	}
-Popup.make do
  h1 "Things To Do"
  list do
    p "Try out Ruby"
	    p "Ride a tiger"
    p "(down River Euphrates)"
  end
end
```
[opentutorial]
- 메소드
```
 def test_method (arg = 100)
 	return arg , arg+1
 end                     //arg 가 1이면 1, 없으면 100 return
 						//return 값이 여러개일수 있음.

```




