/**
 * 
 * @param { number } min 
 * @param { number } max 
 * @returns { number }
 */
export const createRandomNumber = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;

/**
 * 
 * @returns { char } a-Z
 */
export const createRandomSpelling = () => {
  const englishSpelling = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  const num = Math.floor((Math.random() * englishSpelling.length));
  const char = englishSpelling.charAt(num);

  return char;
}

/**
 * 
 * @returns { number[] } [number, number, number]
 */
export const createRandomRGB = () => {
  return [createRandomNumber(0, 255), createRandomNumber(0, 255), createRandomNumber(0, 255)];
}

/**
 * @returns { boolean }
 */
export const createRandomBoolean = () => Boolean(createRandomNumber(0, 1));