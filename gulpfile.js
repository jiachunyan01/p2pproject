//引入gulp
var gulp=require("gulp");

//引入系统模块path路径
var path=require("path");

//引入插件模块
var less=require("gulp-less");
var sass=require("gulp-sass");
var uglify=require("gulp-uglify");
var rename=require("gulp-rename");
var cleanCss=require("gulp-clean-css");
var babel=require("gulp-babel");
//引入热刷新模块
var livereload=require("gulp-livereload");

//配置less任务
gulp.task("lessTask",function () {
    gulp.src('./src/less/*.less') 
    .pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ] 
    }))
    .pipe(cleanCss()) 
    .pipe(rename(function (path) {
        path.basename += ".min";
    })) 
    .pipe(gulp.dest('./dist/css/minCss')) 
    .pipe(livereload()); 
});

//配置sass任务
gulp.task("sassTask",function () {
    gulp.src('./src/scss/*.scss')
    .pipe(sass().on('error', sass.logError)) 
    .pipe(cleanCss()) 
    .pipe(rename(function (path) {
        path.basename += ".min"; 
    })) 
    .pipe(gulp.dest('./dist/css/minCss')) 
    .pipe(livereload()); 
});

//配置js压缩任务
gulp.task("uglifyJS",function () {
    gulp.src('./src/js/*.js') 
    .pipe(babel({
        presets: ['@babel/env']
    }))
        .pipe(uglify()) 
        .pipe(rename(function (path) {
            path.basename += ".min"; 
          })) 
        .pipe(gulp.dest('./dist/js'))
        .pipe(livereload()); 
});

//配置default默认任务
gulp.task("default",function () {
    livereload.listen();
    gulp.watch("./src/less/*.less",["lessTask"]);
    gulp.watch("./src/scss/*.scss",["sassTask"]);
    gulp.watch("./src/js/*.js",["uglifyJS"]);
});