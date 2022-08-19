# 43: Hashing and de-hashing data using PHP | PHP tutorial | Learn PHP programming

1. <https://www.youtube.com/watch?v=Qq96ZgiY1dY>

2. php -S localhost:8000 실행 후 확인

3. password_hash("test123", PASSWORD_DEFAULT) 함수를 이용해 암호화를 하고

4. password_verify($input, $hashedPwdInDb) 함수를 이용해  
   일반 문자열 암호와 암호화가 된 패스워드 값을 비교해서 같은 암호인지 확인할 수 있음.
