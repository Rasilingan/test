require('dotenv').config()
const mongoose = require('mongoose');
const express = require("express")
const app =express()
const authRoutes=require("./routes/auth");
const bodyParser = require("body-parser");
const cookieParser=require("cookie-parser");
const cors=require("cors");
// const userRoutes=require("./routes/user");



//db connection
mongoose.connect(process.env.DATABASE
).then(()=>{
    console.log("DB CONNECTED");
})
app.get("/", (req, res) => {
    res.status(200).send(`Hi Welcome to the Login and Signup API`);
  });

app.use(express.json());
app.use(cookieParser());
app.use(bodyParser.json());
app.use(cors());
app.use("/api",authRoutes);



const port = 7000;

app.listen(port,()=>{
    console.log(`App is running at ${port}`)
});
