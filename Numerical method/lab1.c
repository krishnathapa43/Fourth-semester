/**lab 1
Solution of non liner eqn using Bisection method and Regular falsi Method.*/

#include<stdio.h>
#include<conio.h>
#include<math.h>
#define f(x) sin(x)-(1/x)
#define e 0.00001
void main(){
float x1,x2,x3,f1,f2,f3;
do{
    printf("Enter the two initial guess:");
    scanf("%f%f",&x1,&x2);
    f1=f(x1);
    f2=f(x2);
}
while (f1*f2>0);

    printf("x1\t x2\t x3\t f(x3)\n");
    do{
        printf("%f\t  %f\t  %f\t  %f\t\n",x1 ,x2,x3,f3);
        x3=(x1+x2)/2;
        f1= f(x1);
        f2= f(x2);
        f3=f(x3);
        if(f3*f1<0)
        x2=x3;
        else
        x1=x3;
    }
    while(fabs (x2-x1)>e);
    {
        printf("The reqired root is :%f",x3);
    }
    getch();
}