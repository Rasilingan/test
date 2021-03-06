const User =require('../models/user')
const { check, validationResult } = require('express-validator');
var jwt = require('jsonwebtoken');
var expressJwt = require('express-jwt');

exports.findall=(req,res)=>{
   User.find({},(err,data)=>{
       if(err){
        return res.status(400).json({
            err:"Cant find users"
        })
       }
      res.json(data)
   })
}

exports.signup=(req,res)=>{
   
    const errors = validationResult(req)
    if(!errors.isEmpty()){
        return res.status(422).json({
            error:errors.array()[0].msg,
            
        })
    }

   const user= new User(req.body)
   user.save((err,user)=>{
    if(err){
        
        return res.status(400).json({
            err:"Not able to save user in DB hy"
        })
    };
    res.json({
        name:user.name,
        email:user.email,
        id:user._id
    });
   })
};

exports.signin=(req,res)=>{
    const {email,password}=req.body; //destructure from body

    const errors = validationResult(req);
    if(!errors.isEmpty()){
        return res.status(422).json({
            error:errors.array()[0].msg,
        })
    }

    User.findOne({email},(err,user)=>{

           if(err || !user){
              return res.status(400).json({
                   error:"User email doesnot exist"
               })
           } 
      
            //create token
          const token=jwt.sign({id:user._id},process.env.SECRET)
            //put token in cookie
            res.cookie("token",token,{expire:new Date()+999});

            //send response to frontend
            const {_id,name,email,role }=user;
            return res.json({token,user:{_id,name,email}});

    });


};

exports.signout=(req,res)=>{
    res.clearCookie("token")

    res.json({
        message:"user signout successfully"
    })
}

