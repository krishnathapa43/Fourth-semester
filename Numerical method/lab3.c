/*
Lab 3
using taylor series
*/
#include <stdio.h>
#include <math.h>
#define f(x) sin(x)+cos(x)+exp(x)-8
#define g(x) cos(x)-sin(x)+exp(x)
#define e 0.000001
int main()
{
    float x1,x2,f1,g1,error;
    printf("Enter the one inital goes be x1=");
    scanf("%f",&x1);
    printf("x1\t     f(x1)       f'(x1)      x2=x1-f(x1)/f'(x1)\n");
    do{
        f1 = f(x1);
        g1 = g(x1);
        x2 = x1 - (f1/g1);
        printf("%f\t %f\t %f\t %f\n ", x1,f1,g1,x2);
        error = x2-x1;
        x1 = x2;
    }
    while(fabs(error)>e);
    printf("The required root is %f", x2);
    getch();
}