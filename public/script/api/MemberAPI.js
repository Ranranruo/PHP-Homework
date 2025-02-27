import { fetchByJson } from "../lib/Fetch.js"

const MemberAPI = () => {
    const existsByUsername = async (username) => {
        const data = await fetchByJson(`/api/members/${username}/exists`);
        return data.data;
    }
    return {existsByUsername}
}

export default MemberAPI;