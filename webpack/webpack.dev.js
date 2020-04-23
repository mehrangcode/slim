path = require("path");

module.exports = {
    mode: "development",
    entry: {
        main: "./Frontend/main.js"
    },
    output: {
        filename: "[name]-bundle.js",
        path: path.resolve(__dirname, "../dist"),
        publicPath: "/"
    },
    devServer: {
        contentBase: "dist",
        overlay: true
    },
    module: {
        rules: [
            {
                test: /\.css/,
                use: [
                    "style-loader", 
                    "css-loader"
                ]
            },
            {
                test: /\.html/,
                use:[
                    {
                        loader: 'file-loader',
                        options: {
                            name: "[name].html"
                        }
                    },
                    "extract-loader",
                    "html-loader"
                ]
            }
        ]
    }

}