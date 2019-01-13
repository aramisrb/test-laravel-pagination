<template>

    <div id="app">
        <h1>{{ message }}</h1>
        <table>
            <tbody>
                <tr v-for="(project, index) in projects">
                    <td>{{ project.id }}</td>
                    <td>{{ project.title }}</td>
                    <td>{{ project.description }}</td>
                </tr>
            </tbody>
        </table>
        <div class="pagination">
            <button class="btn btn-default" v-on:click="fetchPaginateProjects(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">
                Previous
            </button>

            <span>Page {{ pagination.current_page}} of {{ pagination.last_page}}</span>

            <button class="btn btn-default" v-on:click="fetchPaginateProjects(pagination.next_page_url)" :disabled="!pagination.next_page_url">
                Next
            </button>
        </div>
    </div>
</template>

<script>

export default {        

        
        data(){
            return {
                projects: [],
                project: {
                    id: 0,
                    title: '',
                    description: ''                    
                },
                url: "api/projects",
                pagination: [],
                message:'Hello concha',
                currentPage:'1'
            }
        },
        mounted() {
            this.getProjects()
            console.log('App vue mounted.')
        },
        methods:{
            getProjects() {
                let $this =this
                axios.get(this.url).then(response => {
                    this.projects=response.data.data
                    $this.makePagination(response.data)
                })                
            },
            makePagination(data) {
                let pagination= {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url
                }
                this.pagination = pagination
            },
            fetchPaginateProjects(url) {
                this.url=url
                this.getProjects()
            }
        }

    }
</script>

