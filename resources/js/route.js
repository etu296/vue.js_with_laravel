import customer from './components/customer.vue';
import CreateCustomer from './components/CreateCustomer.vue';
import EditCustomer from './components/EditCustomer.vue';

 export const routes = [{
    name: 'home',
    path: '/',
    component: customer
},
{
    name: 'create',
    path: '/create',
    component: CreateCustomer
},
{
    name: 'edit',
    path: '/edit/:id',
    component: EditCustomer
}
];