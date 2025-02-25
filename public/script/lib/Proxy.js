export const createDeepProxy = (target, handler) => {
  for(const key in target) {
    if(typeof target[key] === "object" && target[key] !== null) {
      target[key] = createDeepProxy(target[key], handler);
    }
  }
  return new Proxy(target, handler);
}