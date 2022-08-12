<template>
<div class="container">
  <h2>List of Data</h2>
  <table class="table table-bordered">
    <thead>

      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Gender</th>
        <th>Skill</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <tr v-for="customer in customers" key="customer.id">  
         
        <td>{{customer.name}}</td>
        <td>{{customer.email}}</td>
        <td>{{customer.image}}</td>
        <td>{{customer.gender}}</td>
        <td>{{customer.skill}}</td>
        <td>
        <button class="btn btn-danger" @click="deleteCustomers(customers.id)">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
 </div>
</template>


<script>
    export default{
       data(){
          return{customers:[]}
        },
       created(){
            this.axios.get('http://localhost:8000/api/customers/').then(response => {
                this.customers = response.data;
             });
        },
       methods:{
           deleteCustomers(id){
                this.axios.delete('http://localhost:8000/api/customers/${id}').then(response =>{
                    let i=this.customers.map(data=>data.id).indexOf(id);
                    this.customers.splice(i, 1)
                });
            }
        }
    } 
</script>


