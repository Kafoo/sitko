let mutations = {
    CREATE_POST(state, post) {
        state.posts.unshift(post)
    },
    FETCH_POSTS(state, posts) {
        return state.posts = posts
    },
    DELETE_POST(state, post) {
        //find the index of the post to delete by looping through the posts array
        //and returning the first item that matches the given condition.
        let index = state.posts.findIndex(item => item.id === post.id)
        state.posts.splice(index, 1)
    },
    FETCH_USERS(state, users) {
        return state.users = users
    },
    FETCH_CATEGORIES(state, categories) {
        return state.categories = categories
    }

}
export default mutations