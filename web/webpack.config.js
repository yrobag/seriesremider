const webpack = require('webpack');


const config = {

    entry: './src/js/app.js',

    output: {
        path: __dirname + '/dist',
        filename: 'bundle.js'
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
