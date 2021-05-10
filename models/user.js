const mongoose =require('mongoose');
const {Schema} = mongoose;


const userSchema = new Schema({
    name:{
        type:String,
        required:true,
        maxlength:32,
    },
   email:{
        type:String,
        required:true,
        maxlength:32,
        trim:true
   },
   password:{
       type:String,
       required:true,
       maxlength:32,
   },
   age:{
       type:Number,
       required:true
   },
   DoB:{
       type:Date,
       required:true,
   },
   Address:{
       type:String,
       maxlength:255,
       required:true
   }
},{timestamps:true})

module.exports=mongoose.model("User",userSchema);