package com.example.demo.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import com.example.demo.entity.User;
import com.example.demo.service.UserService;

@RestController
@RequestMapping("/user")
public class UserController {
    @Autowired
    private UserService userService;

    @RequestMapping("/login")
    public String login(User user){
        return userService.login(user);
    }

    @RequestMapping("/regist")
    public String regist(User user){
        return userService.regist(user);
    }

    /**
     * 解决查询数据库中文出现乱码问题
     * @return
     */
    @RequestMapping(value = "/alluser",method = RequestMethod.GET,produces = "application/json;charset=UTF-8" )
    public List<User> findAll(){
        return userService.findAll();
    }
}
