// import UsersList from './pages/UsersList.vue';
import Router from 'vue-router'
app.use(Router);
import AdminPage from "./pages/AdminPage.vue";

import UserList from "./pages/UserList.vue";

const routes = [
    {path: '/users', component: UserList},
    {path: '/admin', component: AdminPage},
];

export default routes;
