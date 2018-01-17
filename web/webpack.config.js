const webpack = require('webpack');


const config = {


    entry: {
        index: "./src/js/index.js",
        show: "./src/js/show.js"
    },

    output: {
        path: __dirname + '/dist',
        filename: "[name].bundle.js",
    },

    module:{
        rules: [

            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [ 'babel-loader' ]
            },

        ]
    }

};

module.exports = config;
