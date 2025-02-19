export const performPesxelSearch = async (query, page) => {
    const response = await fetch(`http://pexel/api/search?query=${query}&page=${page}`);

    return response.data;
}