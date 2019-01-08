let routes = [
    {
        path: "/",
        component: require("../components/Shops.vue"),
        name: "all"
    },
    {
        path: "/liked",
        component: require("../components/Liked.vue"),
        name: "liked"
    }
];

export default routes;
