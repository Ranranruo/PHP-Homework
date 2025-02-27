export const fetchByJson = async (uri, options) => {
  return await (await fetch(uri, options)).json();
}