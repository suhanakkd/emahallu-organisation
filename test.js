//write a program to find the factorial of a number using recursion
function factorial(n) {
    if (n === 1) {
        return 1
    }
    return n * factorial(n - 1)
}