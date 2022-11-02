import {reactive} from 'vue'
export default reactive( {
    mainParams: {
        posts: [],
        last_page: 0,
        total: 0,
        current_page: 1
    }
} );
// import Vue from 'vue'
// export default Vue.observable( {
//     mainParams: '',
// } );
