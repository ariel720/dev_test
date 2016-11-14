루비 문법

 - 배열선언
```ruby
 @arr=[1,2,3,]
=> [1, 2, 3]
```

*에러발생
```ruby
arr.each do |f|
010:1* end
NameError: undefined local variable or method `arr' for main:Object
Did you mean?  @arr
```

 - 배열돌기
```ruby
@arr.each do |f|
end
```

 -배열 하나씩 찍기
```ruby
@arr.each do |f|
print f
end
```





- 한줄에 하나씩 찍기
```ruby
 @arr.each do |f|
 print f
 print "\n"
 end
1
2
3
=> [1, 2, 3]
```




