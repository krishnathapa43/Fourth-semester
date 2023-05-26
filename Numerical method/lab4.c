#include<stdio.h>
#include<conio.h>
#include<math.h>
#define g(x) 1/sqrt(1+x)
#define e 0.000001
int main()
{
    float x1,x2,g1,error;
    printf("Enter any inital guess x1:-");
    scanf("%f",&x1);
    printf("\n x1           \t x2           \t g(x1)");
    do{
        x2=g(x1);
        printf("\n%f \t%f \t%f",x1,x2,g(x1));
        error= x1-x2;
        x1=x2;
    }
    while(fabs(error)>e);
    printf("Root is %f",x2);
    return 0;
}