# Section 3 - Lesson 21
# Webpack Update Note

In the next lectures we will use a plugin called webpack. The recent version of this plugin contains some slight changes
than the version I used in this video. These changes will probably cause some errors. If you face any errors in the next
couple of lectures, please refer [to this discussion](https://www.udemy.com/the-complete-guide-to-building-premium-wordpress-themes/learn/v4/questions/5433612)
or check these steps below:

1. Go to package.json file and check which package of these do you have installed, '@babel/preset-env' or 'babel-preset-env'.
2. Go to .babelrc file and make sure that the "presets" corresponds to the plugin you have in package.json. So either 
   '@babel/preset-env' or 'babel-preset-env'
3. Go to gulpfile.babel.js and find this line:
    ```js
    options:{
      preset:['babel-preset-env']
    }
    ```
4. In Webpack 4, you can set a mode option which can either be development or environment. So we can set this according 
   to our PRODUCTOIN flag like so:
    ```js
    export const scripts = () => {
      // ...
    }
    ```
   This way webpack will automatically minify the Javascript output in production mode and you can skip the uglifyJS 
   plugin that we will install at the end of the lecture.

__If this didn't help you, please create a new question in the Q&A section and I will reply as soon as possible.__