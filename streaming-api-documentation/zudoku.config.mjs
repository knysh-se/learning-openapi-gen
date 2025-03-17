/** @type {import('zudoku').ZudokuConfig} */
const config = {
    topNavigation: [
        {id: "docs", label: "Documentation"},
        {id: "api", label: "API Reference"},
        {id: "about", label: "About"}
    ],
    sidebar: {
        docs: [
            {
                type: "category",
                label: "Documentation",
                items: ["/docs/installation", "/docs/authorization", "/docs/about"]
            }
        ]
    },
    redirects: [
        {from: "/", to: "/docs/installation"},
        { from: "/about", to: "/docs/about" }
    ],
    apis: {
        type: "file",
        input: "./apis/openapi.yaml",
        navigationId: "api"
    },
    docs: {
        files: "/pages/**/*.{md,mdx}",
    }
};

export default config;
