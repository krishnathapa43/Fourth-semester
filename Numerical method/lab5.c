// integartion using trapezoidal, simpson 1/3 rule, simpson 3/8 rule : lab -5  

// trapezoidal rule

#include<stdio.h>
#include<conio.h>
#include<math.h>
float f(float x){
    return cos(x)/(1+x*x);
}

void main(){
float a, b, h, x, ans, sum=0;
int n;
printf("Enter the initial and final value x: \n");
scanf("%f%f", &a,&b);
printf("/n Number of segments :");
scanf("%d", &n);
h=(b-a)/n;
for (x=a; x<=b; x= x+h){
    if(x== a)
    sum = sum + f(x);
    else if (x==b)
    sum = sum + f(x);
    else 
    sum = sum + 2*f(x);
}
sum = sum*h/2;
printf("\n integral value of f(x) = %f", sum);
// for(i=0 ; i<n ; i++){
//     if(i%2 == 0)
//     {
//         sum = sum + 2*f(x);
//     }
//     else{
//         sum = sum + 4*f(x);
//     }
// }
// ans = (h/3)*(f(a) + f(b) + )
}   