FROM openjdk:8
VOLUME /tmp
COPY JDKBlog.jar JDKBlog.jar
EXPOSE 28083
ENTRYPOINT ["java", "-jar", "JDKBlog.jar", "--spring.profiles.active=test", "--server.port=28083", "> /log/app.log"]
