package com.example.demo.mapper;

import java.util.List;

import com.example.demo.entity.*;
import org.apache.ibatis.annotations.Mapper;

@Mapper
public interface UserMapper {
    List<User> findAll();
    User findByName(String name);
    String findPswByName(String UserName);
    void save(User user);
}
