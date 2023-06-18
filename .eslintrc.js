module.exports = {
    root: true,
    env: {
        browser: true,
        es2021: true
    },
    parser: "vue-eslint-parser",
    extends: [
        "eslint:recommended",
        "plugin:vue/vue3-essential",
    ],

    overrides: [
        {
            env: {
                node: true
            },
            files: [
                ".eslintrc.{js,cjs}"
            ],
            parserOptions: {
                sourceType: "script"
            }
        }
    ],
    parserOptions: {
        ecmaVersion: "latest",
        sourceType: "module"
    },
    plugins: [
        "vue"
    ],
    rules: {
        indent: [
            "error",
            4
        ],
        "linebreak-style": [
            "error",
            "unix"
        ],
        quotes: [
            "error",
            "double",
            { avoidEscape: true, allowTemplateLiterals: true }
        ],
        semi: [
            "error",
            "never"
        ],
        "no-unused-vars": [
            1,
            { args: "none" }
        ],

        "no-multiple-empty-lines": [1, { max: 1, maxEOF: 1 }],
        "no-trailing-spaces": ["error", { skipBlankLines: true }],
        "brace-style": ["error", "allman", { allowSingleLine: false }],
        "arrow-parens": ["error", "as-needed"],
        "object-curly-spacing": ["error", "always"],
        "implicit-arrow-linebreak": ["error", "beside"],
        "arrow-body-style": [
            "error",
            "as-needed",
            { requireReturnForObjectLiteral: true }
        ],
        "vue/max-attributes-per-line": "off",
        "max-len": "off",
        "import/prefer-default-export": "off",
        "vue/require-prop-types": "off",

        "vue/html-closing-bracket-spacing": "off",
        "vue/multi-word-component-names": "off",
        "vue/no-lone-template": "off",
        "prefer-destructuring": "off",
        "no-debugger": 0,
        "default-case": 0,
        "promise/always-return": 0,

        "quote-props": ["error", "as-needed"],
        "no-await-in-loop": 0,
        "accessor-pairs": "error",
        "vue/html-quotes": ["error", "double", { avoidEscape: true }],
        // remove spaces after quotes in html
        "vue/html-closing-bracket-newline": [
            "error",
            {
                singleline: "never",
                multiline: "never"
            }
        ]
    }
}
