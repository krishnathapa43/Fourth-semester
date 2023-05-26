// euler method

#include<stdio.h>
#include<conio.h>
#include<math.h>
float fun(float x, float y){
    float f;
    f = (y-x)/(y+x);
    return f;
}
void main(){
    int i , n;
    float x0, y0, xp, h, y;
    printf("enter the initail value x and y :");
    scanf("%f%f", &x0,&y0);
    printf("enter x at which y is required:");
    scanf("%f", &xp);
    printf("enter the stepsize:h:");
    scanf("%f", &h);
    n= (xp - x0)/h;
    for(i=0; i<=n; i++){
        y= y0 + h*fun(x0,y0);
        x0=x0 + h;
        y0= y;
        printf("%f\t %f\n", x0,y);
    }
    printf("\n value of y at x=%f id %f", x0,y0);
}