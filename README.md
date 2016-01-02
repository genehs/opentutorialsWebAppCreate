# opentutorialsWebAppCreate
생활코딩 웹 애플리케이션 만들기.

프로그래밍을 처음 하는 사람이라도 다 할수 있는 수업이지만, 쉽지는 않을 것.

반응형 웹 - 사용자의 화면의 크기에 따라 적당히 컨텐츠의 모양이나 형식이 변경 되는 것도 살펴봄.

수업시간 - 20~30시간?


##웹 애플리케이션을 만드는 순서.

1. 구상.
2. 기획(계획).
3. 디자인.
4. 개발 (Development).
5. 테스트.

중요한 개념 - Start Small (처음부터 크게 만들지 말고 작게 시작해서 개선하자.)

##구상

무엇을 만들지 고민하는 과정.

생활코딩과 같은 홈페이지를 만드는 과정.

첫번째 선택 : 블로그 -> 문제(최신순 정렬)

직접구현하자라는 생각을 하게됨.

오래된 순으로 정렬.

ㅋㅋㅋ 전략 http://goo.gl/ZuuCbh

##기획

UI 모델링

* UI- UserInterface 사용자가 시스템을 제어하는 조작장치.
* 모델링 - 직접 만들기 전에 가상으로 만들어보는것. 사용자의 입장에서 동작하는 기능을 가상으로 만들어 보기.

UI 모델링이 중요한 이유! -> 커뮤니케이션

모델링 도구
* 손그림
* Pencil -> http://pencil.evolus.vn/
* balsamiq -> https://balsamiq.com (유료)
* PowerPoint


##인터넷과 웹의 역사

인터넷과 웹은 다를까요? 결론적으로 다르다.

인터넷의 안에 웹이 포함되있음 ( 인터넷이 더 넓은 개념 )

웹과 형제쯤 되는 기술들.(FTP, 이메일등..)

1960년대 - 인터넷 등장.
1990년대 - 웹 등장. 

팀버너스리 -> 웹 창시자.(HTTP, HTML 만듬)

## 서버 클라이언트(13분)

우리 수업에서 가장 큰 체계.

웹브라우저 - 클라이언트.
웹서버 - 서버.

클라이언트가 서버컴퓨터에게 **요청**함.
서버컴퓨터가 클라이언트에게 **응답**함.

클라이언트 - 갑(고객)
서버 - 을(서비스종사자)

준비물 - 웹브라우저, 웹서버(프로페셔널한..?)

웹서버를 컴퓨터에 설치해야됨.

공부할때는 한대의 컴퓨터로 가능함.(웹서버와 웹브라우저를 두개 다 설치)

웹서버 종류
* Apache(한번도 1등을 놓친적없는 웹서버 분야에서 절대강자 우리 수업은 이걸로 구축.)
* Nginx
* IIS(마이크로소프트.)

**Apache**
http://projects.apache.org/projects/http_server.html -> 여기서 설치하는게 정석이지만. 까다롭다.

**bitnami**
이걸 이용해서 한방에 설치(Apache + php + mysql)

Windows
https://bitnami.com/stack/wamp

Mac
https://bitnami.com/stack/mamp

Linux
https://bitnami.com/stack/lamp

##윈도우에 웹서버 설치

검색엔진에서 bitnami wamp 검색

용량이 꽤 큼. 120mb 정도?

프레임워크 설치 화면이 뜨는데 일단은 필요없어서 다 끔..

DB 비번 입력해줌. 123456 ?

방화벽 화면이 뜨면 - 액세스 허용

브라우저에서 localhost/index.html 입력하고엔터 -> 화면이 뜨면 정상 작동되는것.

htdocs 폴더의 index.html 을 실행해줌..

일단 기본 포트가 안되서 8000번으로 변경해줌..

localhost:8000/index.html 이런식으로 해야됨..

##서버제어

Apache, php, mysql 제어

Bitnami

Manager Servers 탭 실행이 되고 있어야됨.

Osx 나 리눅스의 경우 자동으로 꺼지니까 주의!!! 윈도우는 계속 실행되있나봄.. 중요!!

mysql 선택후 config 누르고 open log 를 누르면 로그를 볼수 있음.

apache 도 마찬가지임.

## 프로그래밍 언어(컴퓨터와 사람의 소통) - 약 3분

언어란? 사람과 사람사이의 약속

프로그래밍 언어란? 사람과 컴퓨터 사이의 약속

코드 혹은 소스라고 부름..

이렇게 코드를 작성하는 행위를 코딩.

소스 코드를 작성하는 사람을 코더 혹은 프로그래머라고 부름..

코드 -> 설계도라고 얘기할수 있음.

코드는 곧 제품이다.

코드를 작성한다 = 곧 제품을 만든다. (중요한 활동)

## HTML 이론.

웹브라우저가 웹서버에게 요청.
웹서버는 응답.(HTML 전달)

HTML 이란?
**H**ypertext -> 문서와 문서가 링크로 연결 되있다.(가장중요)
**M**arkup -> tag와 같은 의미??
**L**anguage -> 언어.

링크는 HTML 의 본질.
HTML의 본질은 웹의 본질.

Tag -> 옷을 사면 붙어져있는거 (옷을 설명해주는 정보)
HTML의 태그도 이것과 같다.

**속성**
가장 중요한 태그의 a 태그 사용법 숙지.
a -> 링크를 나타내는 태그
<a>생활코딩</a> -> 아무것도 할수 없음.

<a href="http://opentutorials.org/course/1">생활코딩</a>
생활 코딩이란 텍스트가 링크라는 사실과 href의 해당되는 주소에 연결되있다는걸 알수있음
href 는 속성명이라고 하고, href안에 들어있는값은 속성값이라고 한다.
href 는 약속이다.

**리스트**

항목화 시키는 태그
<li>html</li> li는 list의 약자.
<li>css</li>
<li>JavaScript</li>

각각의 그룹을 어떤태그로 감쌀수있음
* ul 태그 == unordered list 순서가 없는 리스트.
* ol 태그 == ordered list 순서가 있는 리스트.
* ol 태그는 자동으로 숫자가 붙음.

태그들을 또다른 태그로 묶을수있음.

* head 태그. -> 문서를 설명. 문서에 대한 정보.
* body 태그. -> 문서의 내용.
* html 태그. -> html 안쪽의 태그들이 html 문서이다.

**HTML 정리**

처음 만든사람은 팀버너스리.

누가 만들까? w3c (HTML을 체계적으로 만들기 위해서 국제기구 출범. 표준정의.)

**<!DOCTYPE html>** -> html의 문법이 아님. 이 HTML 문서가 어떤 표준안에 따라서 작성된 건지 웹 브라우저가 이해 할수 있도록 기술.
코드가 정확하게 작동하기 위해서는 이것을 통해서 명확히 표현하는게 좋다. 이 것은 html5를 의미함.

**Tag Reference**
HTML의 문법은 아주 경량이다. 100개 ~ 200개 사이일듯?
Tag를 빽빽이 하듯이 알 필요는 없을듯.
하지만 우리가 코딩을 할때는 모르는 것을 찾으면 된당.
어떤 태그가 있는지만 알면 됨.
실제로 필요할때는 찾아서 연구하면 됨.

http://dev.w3.org/html5/html-author/

http://opentutorials.org/course/1058

본질

HTML의 본질은 정보이다.
어떠한 정보를 사람도 이해하고 컴퓨터도 이해하게 태그라는 것을 이용해 규정하고 정의하는것이 HTML의 궁극적 목표다.

##HTML 실습

수업에서 할려는건 간단한 웹 사이트를 만들려는 것.

우리가 기획한 웹사이트를 정보의 형태로 만드는것 -> HTML

* h1 태그 -> 가장 큰 제목.
* h2 태그 -> 그 다음 제목.

**Semantic Web(의미가 잘 드러나는 웹)**

디자인을 담당하는 태그나 역활들이 css 로 분리되기도 함.

원시적인 웹 -> 의미론적인 웹으로.. XHTML이라는게 있었음..

현시점(HTML5)

* nav 태그 -> 내비게이션의 줄임말.. 이 태그로 감싸면 이 리스트가 네비게이션을 위한 리스트라는 걸 분명하게 이해 가능. 어떤 의미가 있지는 않음.
* header 태그 -> 이 문서의 헤더 부분에 해당되는 것이라는걸 분명히 드러낼수있음. 어떤 의미가 있지는 않음.
* article 태그 -> 본문.

**쉬어가기**

우리는 지금까지 웹서버와 웹브라우저를 이용해서 화면에 보여지는 과정을 마침.

초기의 웹을 복원했다.. 초기의 웹은 이정도의 기능성을 가지고 있음.

시간이 지날 수록 훨 씬더 많은 사람들이 웹을 함.

하지만 시간이 지날 수록 점점 복잡해짐.

강력해진만큼 복잡해졌다.

본질에 집중하자.

갈림길에 서있음.. 우리가 선택할수있는 두가지의 길이 있음..

웹브라우저(클라이언트사이드 테크놀로지.)
* HTML
* CSS
* JavaScript

웹서버(서버사이드 테크놀로지.)
* PHP
* MySQL

실제로 현업에서는 클라이언트 엔지니어가 있고 서버 엔지니어가 있음.(규모가 커지면..)

서버 사이드 기술들은 아무래도 낯설긴함(일반인들기준으로)

순서

클라이언트 -> 서버

## 개발도구

도구의 필요성.. ( 삽과 포크레인같음) 포크레인은 강력하지만 배우는데 오래걸림.

버전 관리 시스템(Version Control System) - 여러분이 작성한 코드를 서버에 안전하게 저장. 조금 어려움.. 

**버전 관리 시스템**
* git - 가장 유망한 버전관리 시스템.
* svn
* Mecurial

git - http://opentutorials/org/course/1492

**코드편집기(Editor)**

에디터는 포크레인 같음. 에디터를 사용하면 훨씬 더 빠르게 작업 할 수 있음.

우리 수업에 사용할 에디터는 github의 atom을 사용할 예정.

우리 수업에서 아톰 에디터는 필수 사항이 아니다. 메모장이나 텍스트 에디터를 사용해도 아무 문제 없음.

**에디터 종류**
* Aptana
* Sublime Text
* Brackets

더 좋은 에디터를 선택하는 건 엔지니어가 당연히 추구해야 될 **목적**이다.

생산성을 높이는데 노력하자.

아톰 : https://atom.io/

아톰에 대한 상세한 사용법은 다음 수업을 참고해주세요. https://opentutorials.org/module/1579

아톰 설치에 문제가 있는 분은 sublime text를 추천합니다. https://opentutorials.org/course/671/3595

현재 저는 visual code를 사용. https://www.visualstudio.com/ko-kr/products/code-vs.aspx

visual code 는 emmet 를 이미 내장하고 있음.

**윈도우에 아톰 설치** (50초)

다운로드를 누르고 설치. 끝 참 간단하죠?

**아톰 사용법**

File - Open Folder 를 선택해서 우리가 선택할 폴더를 선택하면 쉽게 작성할수 있음. htdocs를 선택.

**장점**
* 더블클릭하면 바로 탭으로 열림. 탭 전환을 통해 빠르게 파일을 수정할 수 있다.
* 알록달록하다. (가독석 향상) - 코드 하이라이트??
* 줄번호
* 플러그인 존재.(확장기능) - 기본 기능 이외의 기능.
* 화면 분할 가능.

아톰의 확장기능중 emmet 설치. - 최고의 확장기능.. html 작성시 거의 필수..

**emmet**
* 코드를 작성하는 걸 도와주는 환상적인 확장기능
새로운 도구가 나오면 개발자들은 마음이 설레임. ?? 이게 낙인 사람이들 많음
* emmet cheat sheet http://docs.emmet.io/cheat-sheet/

신났네..

li*3>a 탭 같은거는 신세계인듯.
ol>li*3>a 이런거..

상당히 빠르게 편집 가능.
Ctrl를 누르고 있는 상태에서 드래그. 멀티 셀렉션이 됨... 그리고 타자를 치면 한번에 바뀔 수 있음.
아주 강력크한 기능..
생산성이 비약적으로 향상.

## CSS 이론

**CSS의 기본문법**

HTML은 못생겼음.. 

정보를 아름답게 표현하는 언어는 CSS

**C**ascading **S**tyle **S**heet

STYLE - 주목

HTML + CSS

CSS는 HTML과 완전히 별개의 언어지만 HTML을 떠날 수 없음.

처음에는 HTML 밖에 없었지만.. HTML이 정보에 집중하게 하기 위해.. CSS가 그 일을 담당.

HTML = 정보

CSS = 디자인

style 태그

**박스모델**

박스모델이 중요함.

브라우저에서 요소 검사. 여기서 이것저것 만져보면 대충이라도 알수 있음.

구글 개발자 도구는 브라우저 상에서 실시간으로 수치를 바꿔가면서 시각적으로 아름다운가 등을 확인 할수 있음.

크롬 개발자 도구 : https://opentutorials.org/course/580

**float**

css의 효과 중요한 문법은 아니지만 다음 수업에서 사용할 내용이기 때문에 미리 소개.

웹 페이지의 레이아웃을 디자인 할때 중요하게 사용됨


## css 실습.

nav - 컨텐츠 폭을 200px, float 속성으로 본문이 오른쪽에 위치하도록. 오른쪽 테두리.
article - float:left, 적절한 여백.

모든 페이지가 같은 컨셉의 레이아웃으로 나오는게 목표.

개선사항.. -> css 파일로 관리. 중복의 제거..

css 후속강의 : http://opentutorials.org/course/45

정리 
htm = 정보.
css = 디자인.

## 복습과 수업 예고

PHP나 Javascript

PHP는 하나의 html 파일을 만들수 있다.

## JavaScript vs PHP

둘다 프로그래밍 언어이고, 둘다 비슷비슷함.

같이 배우면 시간이 빠르게 단축됨.

자바스크립트와 PHP 는 대단히 미묘한 관계

JavaScript - 클라이언트
PHP - 서버

두개의 언어는 협력적인 관계이기도 함. ( 하지만 Node.js 가 등장했지...)

* HTML, CSS - 정적인 언어(한번 작성하면 바뀌지 않음)
* JavaScript, PHP - 동적인 언어(사용자가 버튼을 누르면 어떤일이 일어나고, 어떤 정보를 입력하면 저장되고..)

CGI - PHP, PERL, JSP 등..

## 웹페이지에 코드 삽입하기.

두개의 언어를 동시에 익힐거임.(php, javascript)

**삽입**

기본적으로 php 파일은 html 과 똑같이 동작함.

PHP 인터프리터가 소스코드를 해석한 결과를 웹서버에 전달하기 때문에.. 

<?php echo 10+10; ?> -> 20 으로 변경된 값을 웹서버가 받고 그 내용을 웹 브라우저에게 전달하기 때문에 php 코드를 볼수없음.

하지만 자바스크립트는 웹서버에서 실행되는 언어이기 때문에.. 코드를 볼수 있음.

PHP는 서버에서 처리된 결과이고. (서버)

자바스크립트는 웹 브라우저에서 처리된 결과이다. (클라이언트)

## 데이터타입과 연산자

문자를 표기하는 방법.

큰따옴표로 시작 

숫자를 표현하고 싶으면 큰따옴표로 쓰면안됨.

"1000000" = 문자 십만임..

문자를 더할때 PHP 는 (.)점을 사용..

자바스크립트는 + 연산자 사용.

## 디버깅

**디버그**

방법에 대한 얘기보다는 어디에서 오류가 생겼는지 찾는 방법..(나는 방법을 알고 싶은뎅.)

자바스크릡트:  웹브라우저에서 도구더보기 - 콘솔 창을 확인해보면 에러 로그가 나옴
php : apache2 폴더의 logs 의 error.txt 확인.

보충수업?
php에 에러가 있을때 화면에 에러가 표시하게 하는것.
C:\Bitnami\wampstack-5.5.30-0\php\php.ini 파일을 열어서..
display_errors = Off 을 On 으로 변경.
Bitnami 매니저 실행하고 아파치 재실행.
PHP는 아파치라는 웹서버에 내부적인 부품과 같은 형태로 동작하고 있는 방식?
디테일한 얘기는 몰라도 됨.

## 변수

바뀔수 있는 값.

자바 : name = "이고잉";

PHP : $name = "이고잉";

변수를 쓰는 이유? 프로그램을 최대한 변경하지 않기 위해.

## 비교

대소 관계를 판단.. 같다 다르다.

==, !=, >, < 등

true, false 를 Boolean 이라고함(블리언)

## 조건문

굉장히 중요한 부분.

컴퓨터의 영역.

어떠한 상황에 따라 이렇게도 되고 저렇게도 되는 것.

자바스크립트, PHP 아래와 같음.(동일)

<pre>

if(true/false) {
    
    // true 인 경우 여기 실행.

}else {

    // false 인 경우 여기 실행.

}

</pre>

## 로그인 기능 만들기.

지금까지 배운거 중간 정리.

조건문이 중요.

## 반복문

반복적인 작업.

사람은 반복적인 작업을 잘 못함.

기계는 반복을 좋아함.

조건문이 기계를 똑똑하게 하는 것이라면..

반복문은 무언가 반복적인 작업을 해서 많은 일을 처리하는 작업.

여기까지 하면 가장 중요하다고 하는 것들은 다 배웠다고 생각하면 됨.

자바스크립트와 PHP 반복문 똑같음.

<pre>
while(true/false) {
    // true이면 계속 반복.
    
}
</pre>

## 배열

영어로 Array

어떤 정보를 담는 그릇.

지금까지 살펴본 정보를 담는 그릇은 변수였음.

배열은 변수와 비슷하면서 다르다.

변수안에는 하나의 값만 담을 수 있지만 배열 안에는 서로 연관되있는 여러 정보들을 하나의 배열이라는 그릇에 담아서 체계적으로 관리 할수 있는 도구이다.

<pre>
// JavaScript
list = new Array("one", "two", "three");

list[0];

// PHP
$list = array("one", "two", "three");

$list[0];
</pre>

배열을 쓰는 이유? 그룹핑??

## 배열과 반복문

배열과 반복문은 바늘과 실 같은 존재.

## 함수

수학시간에 배우죠..

함수는 굉장히 중요한 도구다..

프로그래밍을 하면 수학을 좀더 구체적인 느낌으로 배울 수 있다..

우리는 수학을 못하는 사람이 아니고 잘할 사람들이다??

수학시간의 함수랑 느낌은 다르지만 본질은 같을 것이다..

<pre>
// JavaScript
function function_name() {
}

function_name();

// PHP
function function_name() {
}

function_name();
</pre>

JavaScript 나 PHP 나 거의 똑같음..

아는 만큼 보인다.

# UI vs API

UI - **U**ser **I**nterface

API - **A**pplication **P**rogramming **I**nterface

Interface - 사람과 사람이 서로 교류할때 사용되는 가장 기본적인 도구인 **언어** 마찬가지임.

사용자가 직접 조작하는 인터페이스를 UI 라고 부름.

애플리케이션이 무언가를 하기 위해 프로그래밍 적으로 그 애플리케이션이 돌아가는 시스템에게 전달하는 명령을 API 라고함.

**API 전성시대!**

과거에는 API를 제공하는 시스템이 운영체제 정도가 있었음.

웹브라우저가 발달하면 수많은 웹 애플리케이션이 만들어지고..

굉장히 많은 사람들이 사용하는 서비스이고.. 무엇보다 중요한건 스스로 API 를 제공함.(facebook, google plus, twitter)

여기서 끝이 아니고.. 스마트 폰이 등장하면서 스마트폰이라는 플랫폼은 API 를 제공.

스마트 폰 뿐만 아니라 수 많은 디바이스도 API 를 제공.

API의 폭발적 증가 + 쉬워진 프로그래밍 (~~개나 소나 다하는..~~)

## 프로그래밍 접근 방법

**적정** 용도의 언어를 **적정** 수준으로 배우세요.

두가지전략
* 장기전략 - 코딩의 실력을 늘리고 나서(오랜시간) 무언가를 만드는것.
* 단기전략 - 서툰 코딩의 실력으로 무언가르 만들어보는것.

단기전략을 더 중요하게 생각하는듯.

수단과 목적을 혼돈하지마랑

API를 **탐험**해보세요.

프로그래밍 언어로 API를 조합해서 에플리케이션을 만들어보세요.

그것을 좋아할 관객을 찾으세요. 관객은 나 자신이 될 수 도 있음..

한계를 경험하세요. (시간이 지나면 코드도 많아지고 기능도 많아짐)

한계를 통해서 절망감이 생기고 절망감이 누적됨. 어느정도 임계점이 될때 (더 잘만들고 싶을때..)

더 잘 할 수 있는 방법에 대한 연구를 찾으세요. (대학의 전공과정) - 대학교를 가라는게 아니고 대학에서 무엇을 배우는지 보고 그 각 각의 취지를 파악하고 그 한계를 느낄때

그것을 해결 할 수 있는 분야를 찾아보고 공부하면 됨. 혼자서 공부하려고 해도 다른 분야보다는 수월할 것.

Computational Thinking - 컴퓨터적 사고.

선배개발자의 성취.
* 알고리즘
* 데이터 스트럭쳐
* 디자인패턴
* 프래임 워크
* 컴퓨터 구조
* 기타 등등..

중요한 것은 순서.. 처음부터 학문적 성취들을 공부하면 포기하게됨.. (공감하기 어렵기 때문에)

## 자바스크립트 실습

만들어볼것 버튼을 누를때 디자인이 변경되게 하는 것.

중요한 것 = 아! 자바스크립트가 그거구나.. 어렴풋이 이해하고 자바스크립트가 HTML을 프로그래밍 적으로 제어하는 언어이구나 이해. 장기적으로 기억해야됨.

div 태그 = 아무 특징없음. 어떤 태그들을 묶는 역활만 함.

이게 최선은 아님. 이기능을 구현하는 가장 좋은 방법은 아니었음.(여러가지 문제가 있음)

지저분하게 자바스크립트가 뒤엉켜 있음. html의 가치를 현저히 떨어트림.

더 좋은 방법을 설명하려면 설명해야되는 양이 늘어남. 그래서 말로 설명하고 상상력을 발휘해서 두리뭉실하게 이해하자.

중복되는 코드는 중복을 제거.. 이사람도 약간 리팩토링 책을 보고 감명받은 사람인듯. 중복의 냄새 악취..등등

어쨌든.. 자바스크립트 파일을 따로 관리 css처럼.

## PHP 실습

웹브라우저, 웹서버, PHP, 파일(정보가담겨져있는)

html 정보를 파일에 저장

기존코드에는 중복이 존재햇음

index.php - 1.txt,2.txt,3.txt 파일로 나눠서 php 에서 txt를 불러오는 방식으로 변경할 예정.

사실 txt로 저장하는 건 과도기적인 방식이고 원래는 데이터베이스를 사용해서 데이터베이스에 정보를 저장하고 가져오는 식이 근대적인 것.

## 데이터베이스

데이터베이스:  정보를 관리하는 전문 애플리케이션

근대적인 웹 애플리케이션은 데이터베이스에 존재하게 됨.

파일 vs 데이터베이스

파일 = 가장 기본적이고, 원시적. 어느 시스템에서나 사용 가능.

데이터베이스 = 공부도 해야되고, 설치도 해야되고.. 등등

하지만 궁극적으로는 파일을 직접 이용하지 않고 데이터베이스를 사용하게 됨. 결국 데이터베이스가 위너.

데이터베이스 장점

* 안전하다.(마치 금고와 같음) 누군가가 여러분의 정보를 무단으로 보는것이나 시스템 고장 등(백업 시스템)?
* 빠르다.(인덱스(색인)를 통해 정보를 빠르게 찾을 수 있도록 미리 잘 정리 해놓음.)
* 프로그래밍적 제어가능.

데이터베이스

* 관계형데이터베이스(MYSQL,MSSQL,ORACLE)

우리는 MySQL을 사용해서 데이터베이스 시스템을 배움.

MySQL은 구체적인 제품이지만 이것을 다룰줄 알면 다른 데이터베이스를 배우는것이 훨씬더 수월해짐.(동작 방식이 비슷)

MySQL은 웹과 함께 성장한 데이터 베이스(Open Source) 워드프레스, 제로보드 등..

MySql 주인 변경.. MySQL AB -> SUN -> Oracle 현재는 Oracle 소유

MySql을 만든 엔지니어들이 만든 데이터 베이스가 MariaDB임.. MySQL과 MariaDB는 완벽 호환 가능.

MariaDB가 훨씬 더 공격적으로 발전하고 있으니까 관심 있게 지켜보세요..

데이터 베이스를 이해하는 핵심 키워드 Structured

표를 사용하여 정리.

ex)

이름 | 나이 | 성별 | 주소 | 장래희망
-----|------|-----|------|------------
최진혁|11   |남    |청주  |만들기전문가
최유빈|7    |여    |청주  |화가
한아람|8    |여    |서울  |만화가
한이은|5    |여    |서울  |미정

표 = table 여러분도 이미 사용해봄. **EXCEL**

정보를 구조화 시켰기에 여러가지 작업이 가능함.

엑셀과 데이터베이스의 차이 = SQL

SQL = **S**tructured **Q**uery **L**anguage  = 컴퓨터에게 구조화된 정보를 질의 하는 프로그래밍 언어.

MySQLClient(Client) 와 MySQLServer(Server) 가 깔려있다고 생각해보자.

ex) 클라이언트 컴퓨터에서 SELECT * FROM topic( SQL ) 을 실행하면 이 명령에 해당하는 정보를 서버 컴퓨터가 클라이언트에게 표로 된 정보를 응답 해줌. 

PHP가 클라이언트라고 할수 있고 MySQL은 서버라고 할수도 있음.(PHP에서 MySql을 사용하면..)

MySQL monitor 을 사용할 예정(mysql 클라이언트)

MySQL monitor = 기분 프로그램(표준적인 mysql 클라이언트) - 사용하기 어렵다..

그런 이유 때문에 GUI 환경에서 데이터베이스 서버에 접속해서 작업할수 잇는 다양한 툴들이 존재함.(하지만 그런 툴들은 구매를 하거나 설치를 해야 됨.)

기본은 MySQL monitor 이다. (교육적인 가치가 높음) 모든 MySQL에 기본적으로 탑재 되있음.

운영체제별 실행 방법이 다름.

윈도우

윈도우 키 누르고 알파벳 r을 누르면 실행 창이 뜨고 cmd 누르고 확인.

mysql위치로 이동. = cd C:\Bitnami\wampstack-5.5.30-0\mysql\bin

mysql -hlocalhost -uroot -p 하고 비밀번호 입력하면 접속됨. 로컬호스트는 같은 컴퓨터라서 로컬호스트라고 한것..

만약에 다른 컴퓨터로 접속할려면 로컬호스트 대신 그 웹의 주소를 적어야됨..

테이블이라는 것은 일종의 파일이라고 할 수 있음.

데이터베이스는 테이블을 묶어주는 일종의 디렉토리 같은 역할을 함.

워드프레스나 제로보드, 익스프레스 엔진등.. 이런 웹 애플리케이션 하나가 데이터베이스 하나를 가지고 있다라는 감각정도만 알면 됨. 

**데이터베이스 보기**

show databases;

**생성시**

CREATE DATABASE opentutorials CHARACTER SET ut8 COLLATE utf8_general_ci;

**데이터베이스 사용**

use opentutorials;

**테이블 생성**

CREATE TABLE `topic` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

** 테이블 보기 **

SHOW tables;


데이터베이스를 쓰는 이유 = 엄격함

** 정보 추가 **

INSERT INTO `topic` (title, description, authour, created) VALUES ('about javascript', 'javascript is ~', 'egoing', '2015-12-26 13:03:5');

** 정보 가져오기 **

mysql> select * from topic;

우리는 SQL 문을 실제로 잘 숙지 해야됨..

## MySQL 실습

데이터를 파일에 저장되는 것을 개선해서 MySQL의 데이터베이스로 교체하는 작업.

동작하는 방법에는 차이가 없지만, 내부적으로 차이가 있음(데이터베이스 저장)

PHP라고 하는 것은.. 파일에서 데이터를 저장하고 읽고 하는 것에서 데이터베이스로 변경.(중계자와ㅏ 같은 역할)

그런 맥락에서 PHP 어플리케이션을 **미들웨어**라고 부름.

PHP에서 **mysqli**라는 PHP 에 내장되있는 것을 사용하자.

        | MySQL monitor                                   | mysqli
--------|-------------------------------------------------|-----------------
서버접속 | mysql -hlocalhost -urrot -p11111;               | $conn = mysqli_connect('localhost', 'root', '11111');
DB선택   | use opentutorials;                              | mysqli_select_db($conn, 'opentutorials');
조회     | SELECT * FROM topic;                           | $result = mysqli_query($conn, 'SELECT * FROM topic');
출력     | 표 형태로  출력                                  | $row = mysqli_fetch_assoc($result); $row\['title'\];

연관배열(associative array)

form 사용.

사용자가 웹을 통해서 정보를 작성할수 있는가.

데이터를 추가하는 방법. 사용자가 데이터베이스를 직접 조작할 필요가 없도록.

## 관계형 데이터 베이스 이론

중요한 내용은 다 배운 상태.

좀더 웹에 실제로 적용 되는 모습을 보고 싶을때..

**관계형 데이터베이스의 종류**

* MySQL
* MSSQL
* ORACLE

관계형 데이터베이스가 주류.

Relational database 중복을 테이블에서 몰아내는 방법?

**topic 테이블**

id | title                   | author
---|-------------------------|-----------------
1  | About JavaScript        | 1
2  | Variable and Constant   | 3
3  | Operator                | 1
4  | Conditional             | 2
5  | function                | 2
6  | Object                  | 3

이것과

**user 테이블**

id | name
---|-----------
1  | egoing
2  | jin
3  | k8805
4  | sorialgi
5  | lily
6  | happydeveloper

의 결합

title                   | name
------------------------|-----------------
About JavaScript        | egoing
Variable and Constant   | k8805
Operator                | egoing
Conditional             | jin
function                | jin
Object                  | k8805

SELECT title, name FROM topic LEFT JOIN user ON topic.author = user.id

왼쪽 오른쪽에서 왼쪽을 기준으로 테이블을 결합해라.. LEFT JOIN

가상의 테이블.. 논리적인 테이블... 두개의 독립된 테이블이 존재하지만 조인과 같은 연산자를 통해서 두개의 테이블이 긴밀하게 관계를 맺고 있어서.. 관계형 데이터베이스다 라고 한다.

SET FOREIGN_KEY_CHECKS=0;
 
-- ----------------------------
-- Table structure for `topic`
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `author` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
 
-- ----------------------------
-- Records of topic
-- ----------------------------
INSERT INTO `topic` VALUES ('1', 'About JavaScript', '<h3>Desctiption</h3>\r\n<p>JavaScript  is a dynamic computer programming language. It is most commonly used as part of web browsers, whose implementations allow client-side scripts to interact with the user, control the browser, communicate asynchronously, and alter the document content that is displayed.</p>\r\n<p>\r\nDespite some naming, syntactic, and standard library similarities, JavaScript and Java are otherwise unrelated and have very different semantics. The syntax of JavaScript is actually derived from C, while the semantics and design are influenced by the Self and Scheme programming languages.\r\n</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n  <li><a href=\"http://en.wikipedia.org/wiki/Dynamic_HTML\">Dynamic HTML and Ajax (programming)</a></li>\r\n  <li><a href=\"http://en.wikipedia.org/wiki/Web_interoperability\">Web interoperability</a></li>\r\n  <li><a href=\"http://en.wikipedia.org/wiki/Web_accessibility\">Web accessibility</a></li>\r\n</ul>\r\n', '1', '2015-03-31 12:14:00');
INSERT INTO `topic` VALUES ('2', 'Variable and Constant', '<h3>Desciption</h3>\r\n\r\nIn computer programming, a variable or scalar is a storage location paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a value. The variable name is the usual way to reference the stored value; this separation of name and content allows the name to be used independently of the exact information it represents. The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.\r\n\r\n<h3>See Also</h3>\r\n<ul>\r\n<li>Non-local variable</li>\r\n<li>Variable interpolation</li>\r\n</ul>\r\n', '3', '2015-05-14 10:04:00');
INSERT INTO `topic` VALUES ('3', 'Opeartor', '<h2>Operator</h2>\r\n<h3>Description</h3>\r\n<p>Programming languages typically support a set of operators: constructs which behave generally like functions, but which differ syntactically or semantically from usual functions</p>\r\n<p>Common simple examples include arithmetic (addition with +, comparison with >) and logical operations (such as AND or &&). </p>\r\n', '1', '2015-06-18 05:00:00');
INSERT INTO `topic` VALUES ('4', 'Conditional', '<h3>Description</h3>\r\n<p>In computer science, conditional statements, conditional expressions and conditional constructs are features of a programming language which perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false. Apart from the case of branch predication, this is always achieved by selectively altering the control flow based on some condition.</p>\r\n<p>In imperative programming languages, the term \"conditional statement\" is usually used, whereas in functional programming, the terms \"conditional expression\" or \"conditional construct\" are preferred, because these terms all have distinct meanings.</p>\r\n<h3>See Also</h3>\r\n<ul>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Branch_(computer_science)\" title=\"Branch (computer science)\">Branch (computer science)</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Conditional_compilation\" title=\"Conditional compilation\">Conditional compilation</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Dynamic_dispatch\" title=\"Dynamic dispatch\">Dynamic dispatch</a> for another way to make execution choices</li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/McCarthy_Formalism\" title=\"McCarthy Formalism\">McCarthy Formalism</a> for history and historical references</li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Named_condition\" title=\"Named condition\" class=\"mw-redirect\">Named condition</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Test_(Unix)\" title=\"Test (Unix)\">Test (Unix)</a></li>\r\n<li><a href=\"http://en.wikipedia.org/wiki/Yoda_conditions\" title=\"Yoda conditions\">Yoda conditions</a></li>\r\n</ul>', '2', '2015-07-25 00:00:00');
INSERT INTO `topic` VALUES ('5', 'Function', 'A function model or functional model in systems engineering and software engineering is a structured representation of the functions (activities, actions, processes, operations) within the modeled system or subject area.', '2', '0000-00-00 00:00:00');
INSERT INTO `topic` VALUES ('6', 'Object', 'In computer science, an object is a location in memory having a value and possibly referenced by an identifier. An object can be a variable, a data structure, or a function. In the class-based object-oriented programming paradigm, \"object\" refers to a particular instance of a class where the object can be a combination of variables, functions, and data structures. In relational database management, an object can be a table or column, or an association between data and a database entity (such as relating a person\'s age to a specific person)', '3', '0000-00-00 00:00:00');
 
-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
 
-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'egoing', '111111');
INSERT INTO `user` VALUES ('2', 'jin', '222222');
INSERT INTO `user` VALUES ('3', 'k8805', '333333');
INSERT INTO `user` VALUES ('4', 'sorialgi', '444444');
INSERT INTO `user` VALUES ('5', 'lily', '555555');
INSERT INTO `user` VALUES ('6', 'happydeveloper', '666666');

**데이터 삽입**

하나의 topic 테이블에서 user 테이블을 분리했음.

데이터베이스를 추가할때 문제가 생김.

user 테이블에서 name에 해당되는 id를 찾아서 변경하고 topic 에 추가.. 없으면 만듬.

## 보안

무술 = 제일 먼저 배우는것 = 낙법(넘어지는 방법) = 실패하는 법

실패를 먼저 배우는 이유 = 성공하는 법에 자신있게 도전하기 위해서.

정보 비즈니스의 핵심? 코드? 물론 중요합니다만 복구 불가능한 것은 아니다.

**데이터** = 잃어버리면 복구 할 수 없는 것. 굉장히 중요하다.

서버는 **데이터**의 집.. 서버엔 데이터님이 계십니다. 서버에 접속할 때는 **경건**하세요. 나는 지금 실 서버를 사용하고 있다는 걸 계속해서 되새겨라..

아쉽게도 표현은 할 수 있지만 전달은 할 수 없는 것. 좋은 엔지니어는 **비극** 속에서 피어나는 꽃. (비극 = 회사의 시스템이 뚫려서 심각한 정신적 물질적 타격을 입었지만. 그사람이 완전히 파괴되지 않을 정도의 비극..)

정보 책임자라면 그런 비극을 꼭 나쁘게 생각할 필요는 없다..~~잘못되도 짤리기 밖에 더하겠어..~~

최고의 보안 담당자는 우리 시스템에 침입한 크래커. (농담 반)

최고의 보안 전문가만이 시스템을 지킬 수 있을까?? 물론 있으면 좋지만.. 대부분엔 없음. 현실적 어려움.

보안이라는 것이 굉장히 중요하고 보안에 대한 좋은 습관을 가질 필요가 있다. 좋은 습관은 자신도 모르게 자신을 비극 속에서 지켜줍니다.

html entity = http://dev.w3.org/html5/html-author/charref

php 함수 : htmlspecialchars html 그대로 출력

php 함수 : strip_tags 태그 사용..

이런 것들을 이스케이핑 이라고 함... html 코드를 해석하는 것으로 부터 대피시킨다.. 굉장히 중요한 기법..

로그인 기능에서 보안하기..

SQL 문에서 WHERE 에서 1=1 이다 이런식으로 하면 모든 행이 참이 되버림..

mysqli_real_escape_string 이런것들도 이스케이핑 이라고 할 수 있음.

## 라이브러리 1 (직접만들기)

* 코드의 감소
* 가독성 향상

소프트웨어에 있어서 코드란? 코드 == 제품

중복제거 -> 생산성의 향상.

중복제거, 재사용.

책 이야기를 해볼까요? 집집마다 각각의 책장이 있고 그 책장에 비슷한 책장이 놓여 있으면 집집마다 중복의 책들이 있다라는 의미.

그런것들을 완화하려고 도서관을 만듬(중복된 책들을 한곳에) 프로그래밍에서 라이브러리는 도서관과 같은 의미

중복해서 사용되는 로직을 재사용 할 수 있도록 부품화(모듈화) 시킨 것.

하나의 프로젝트에서 재사용, 자신의 프로젝트에서 재사용. 모두의 프로젝트에서 재사용.

무엇보다 다른 사람이 만든 잘 정리된 라이브러리를 사용해 자신의 프로젝트의 생산성을 향상시키는 것은 중요하다.

## 라이브러리(타인의 것 사용하기)

바퀴를 다시 만들지 마라. 밑바닥부터 만들 필요는 없다.

다른 사람들이 만든 여러 라이브러리를 이용하자. 엔지니어들의 소양

현재 부트스트랩 3.3.4 버전을 사용. (수업에서 혼란스럽지 않기 위해) https://github.com/twbs/bootstrap/releases/download/v3.3.4/bootstrap-3.3.4-dist.zip

라이브러리를 쓰지 않으면 얼마나 많은 패널티를 당하는지 확인하기 위해 배우는 수업임..

트위터 부트스트랩을 이용하면 여러가지 다양한 디자인을 할 수 있음. (아름 답지는 않아도 어디가서 빠지지 않을 디자인 가능).

트위터 부트스트랩을 확인 하는 가장 쉬운 방법은 사이트 그 자체임. http://getbootstrap.com/

우리 수업의 목적은 **라이브러리**다.

라이브러리를 접하는 경로 -> 개발자 커뮤니티. 새로운 라이브러리가 소개되는것에 관심을 가지는 것은 굉장히 중요하다.

개발자에게 본질적인것. 개발자의 본질은 생산성을 추구. 우리는 개발자다. 이런 도구들에 관심을 가지자. 홈페이지를 쭉 보고.. 영어라서 이해가 안가면

한국어로 된 소개 페이지로 가서 보자.. 데모 사이트들도 보자. 개발자 사이트는 친절하지는 않으므로 노력이 필요함.

Getting Started 들어가면 보통 시작점을 제공함. 제일먼저 관심을 가질건 코드임.

공식문서 

장점 
* 모든 정보가 망라되있음. 

단점
* 중요한것과 덜 중요한것이 똑같이 표현 되 있음.

grid 시스템을 제공 (12개로 이루어진..) http://getbootstrap.com/css/#grid-example-basic

그냥 css나 자바스크립트를 써도 되지만 트위터 부트스트랩은 여러가지 편의 기능을 제공함.

이 수업 이해 못해도 다음 수업 못하는거 아니니까 넘겨라.. 모든것을 트위터 부트스트랩으로 할수는 없고 세부적인건 css로 조절.

container = http://getbootstrap.com/css/#overview-container

## 인터넷

### ip와 도메인

인터넷이라고 하는 웹이 동작하는 기반이 되는 이해를 높이기 위한 수업.

우리가 어렵게 구축한 웹 애플리케이션을 모든 사람이 접속할 수 있게.. 실제 서비스를 하려면 인터넷에 대한 어느정도의 이해를 필요로 하기 때문에..

동시에 인터넷이 동작하는 방식을 알려주기 위해..

인터넷은 인간이 만든 체계중에 가장 거대하고 복잡한 것. 그렇기 때문에 짧은 시간동안 모든 것을 전달하기 어렵기 때문에. 가장 중요한 원리들을 살펴 볼 예정.

인터넷을 이해하는 중요한 개념 = IP 주소 (Internet Protocol Address) 인터넷이라는 쳬계가 동작하기 위해서는 여러 플레이어가 있음.

각각의 플레이어들이 준수해야되는 규칙들이 존재하는데 그러한 규칙들을 IP 라고 부름. 각각의 컴퓨터는 주소를 가져야되는데 그것을 IP 주소라고함.

전화번호 = IP

IP 주소 알아내기. cmd에서 ping opentutorials.org

웹사이트 접속방법

* ip Address
* domain name

실제로 통신하기 위해서는 서버쪽만 있어야 되는게 아니고 클라이언트도 있어야됨. 

자기 자신의 IP를 확인하는 방법 검색엔진에서 my ip 라고 입력하고 아무 사이트나 들어가서 확인하면 됨.

편지봉투에 비유하면 보내는 사람 = 자신의 IP , 받는 사람 = 접속하고 싶은 IP

IP 주소의 단점 = 기억하기 어렵다. 도메인 = 소유지 , 도메인 네임 -> IP 주소 ip라는 기억하기 어려운걸로 접속하지 않고 도메인으로 접속함. 

사실 컴퓨터는 도메인을 통해서 서버에 접속 할 수 없습니다. IP를 통해서만 접속할 수 있습니다.(전화번호와 마찬가지 이치)

어떻게?? DNS (Domain Name System) 도메인 네임이 동작하는 시스템. Name Server 에 접속을 해서 해당 사이트의 ip를 응답함.

도메인을 구입해서 네임서버에 등록해야 한다.. (가격 만원~오만원) 일년에 한번씩..

샐활코딩의 도메인 수업 =  http://opentutorials.org/course/228/1450

### IPv6

자신의 ip를 알아야 된다. 검색 엔진에 my ip 대부분의 경우에는 안됨.

실패 = 사설 IP를 사용.

성공 = 공인 IP를 사용.

왜 안될까??? 공인 IP는 무엇이고 사설 IP는 무엇일까.

IP의 숫자는 몇개일까요??? 0.0.0.0 ~ 255.255.255.255 42억개의 IP가 만들어 질 수 있음. 결코 많지 않음..

컴퓨터, 스마트폰, 사물인터넷 등.. IP가 부족합니다.. 2011년도에 이미 모든 IP를 다 사용했었음.. 굉장히 위기 사항.

여러 방법이 고안 됩니다.. 서버에 접속할 수 없는 이유를 ip주소 부족의 문제의 틀에서 생각해 봅시다.

Ipv4 222.109.62.43

Ipv6 2001:0db8:85a3:08d3:1319:8a2e:0370:7324

ipv6은 2의 128승개 만큼 만들수있음. 2823구 6692양 0938자 4634해 6337 경 4607조 4317억 6821만 1456개..

지금 현재는 ipv4와 ipv6가 동시에 사용되는 과도기적인 시기임.

### 포트

왜 접속이 안될까? 공유기(대부분이)

공유기란? 여러분의 집에 컴퓨터가 3대가 있다고 가정하에.. 한대의 컴퓨터에 한대의 통신사가 연결되있으면 접속이 가능함. 하지만 이렇게 하면 비용이 많이 발생함.

경제적인 부담을 경감시키기 위해서 공유기라는 기계를 구입하고 하나의 통신사 회선에 공유기를 연결하고 이 공유기와 각각의 컴퓨터를 연결한다. 그 이유는 회선이 정액제이기때문에..

집집마다 공유기가 대개 있음.. 무선의로 통신하는 방식이 wifi 임. 노트북과 마찬가지로 스마트폰도 wifi 를 사용함. 각각의 컴퓨터는 ip를 가지고 있고 공유기도 ip를 가지고 있음.

my ip의 주소는 공유기의 주소임.. 이 주소로 접속하면 공유기로 접속하는 것. 그렇기 떼문에 이 컴퓨터에 도달하지 못하므로 서비스 불가. 공유기가 공인 ip이고 내 컴퓨터가 사설 ip임.

가정에 있는 공유기는 대부분 문제를 해결 할 수 있음. 우리 수업은 꼭 자신의 컴퓨터로 서버를 돌리기 위해서 하는 게 아니고 인터넷의 동작 방식을 알기 위한 수업이므로 해결을 못해도 계속 보자.

포트포워딩을 통해 가능함.

포트 = 항구 (배가 정박하는 곳) 기본적으로 서버 접속시 http를 사용하므로 브라우저에서 생략해줌.

http://222.109.62.43 = http://222.109.62.43:80 

80을 기본적으로 웹브라우저에서 생략해줌. 약 6만5천개의 포트가 있음.

### 포트포워딩

공유기에서 포트포워딩 설정을 해보자

공유기의 관리자에 접속합시다. 통신사에 계약한 회선을 WAN 구멍에 꽃음.. 이것은 공인 ip를 부여받았은것.

여러분의 컴퓨터에 LAN1의 구멍에 꽃음. 다른 컴퓨터도 마찬가지.. 공유기에 연결된 각각의 컴퓨터가 공유기의 관리자에 접속하려면..

192.168.0.1에 접속하면됨. 대부분의 경우 이것에 해당됨. skb 같은경우 http://192.168.25.1

iptime을 기준으로 설명합니다만 본질적으로 사용법은 모두 같음.

사설 ip 확인 방법 : cmd에서 ipconfig

### 절대경로 상대경로

지금 이 시점에서 필요한 이유. ip를 통해서 우리의 애플리케이션에 접속할 수 있음. 클릭하면 localhost로 변경됨. ip와 로컬호스트는 완전히 다름.

localhost가 주소안에 포함되있음(현재) ip 체계로 변경되었지만 소스코드는 localhost로 되있기 때문에.. 원초적인 방법은 경로를 의미하는 곳을 찾아

ip로 변경.. 하지만 이게 깔끔하지 않음 왜나하면 ip가 변경되면.. 혹은 테스트를 위해 localhost로 작업해야되면 그럴때 마다 주소를 변경해야되는 불합리성이 생김..

이렇기 때문에 상대경로를 사용해서 개발의 효율성을 높일수 있음.

절대경로
서울시 서울동 서울 아파트 302호

상대경로
서울시 서울동 서울 아파트 301호에 살고 있는 사람이 말 하는 옆집

자기가 어디에 살고 있던 옆집을 가리키고 싶으면 상대경로..

우리는 이미 잘 알고 있음.. 

절대 경로 = 나의 위치와 무관하게 가르키고 싶을때

상대 경로 = 나의 위치에 따라

http://localhost/path/1.html

상대경로 = http://localhost/index.php
절대경로 = ../index.php

/ 슬래시만 붙어있으면(혼자 단독으로) 최상위 디렉토리를 의미함..
../ 현재 위치의 디렉토리 인 부모 디렉토리
./ 현재 디렉토리
슬래시 없이 작성해도 현재 디렉토리..

상대 경로 사용시 앞에있는 주소가 바뀌지 않음(우리가 원하는 방식)

localhost로 접속시 localhost/index.html 로 접속되고 index.html 이 없으면 index.php 로 알아서 접속됨..

### 유동 IP와 DDNS

IP고갈 대책 3 

유동 IP(dynamic address) = IP가 변화한다. 가정에서 사용하는 모든 사용자에게 해당되는 일.

통신사도 IP가 한정적이므로 사용하지 않으면 IP를 회수해서 사용함. 유동 IP는 IP가 변해요.

유동 IP를 해결하기 위해 DDNS(Dynamic DNS)가 도입됨. DDNS가 적용된 컴퓨터에는 네임서버에 접속해서 컴퓨터의 IP가 무엇인지 계속해서 가르쳐줌.

사용자는 도메인 주소로 접속하고 DDNS는 도메인과 호스트의 ip를 지속적으로 일치화 시킴. ddns 서비스.