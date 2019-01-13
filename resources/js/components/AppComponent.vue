<template>

    <div id="app" class="container my-4">
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
        <nav class="mb-4">

            <span>Page {{ pagination.current_page}} of {{ pagination.last_page}}</span>
            <v-pagination 
            v-model=pagination.current_page 
            :page-count=pagination.last_page
            :labels="paginationAnchorTexts"
            :classes="bootstrapPaginationClasses"
            @input="next"
            >
            </v-pagination>


        </nav>
        

    </div>
</template>

<script>

import vPagination from 'vue-plain-pagination'

export default {        

        components: { vPagination },  
        
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
                currentPage:'1',
                 bootstrapPaginationClasses: {
                    ul: 'pagination',
                    li: 'page-item',
                    liActive: 'active',
                    liDisable: 'disabled',
                    button: 'page-link'  
                  },
                paginationAnchorTexts: {
                    first: 'First',
                    prev: 'Previous',
                    next: 'Next',
                    last: 'Last'
                }
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
            },next(page) {
                this.url="api/projects?page="+page
                this.getProjects()                
            }
        }

    }
</script>

