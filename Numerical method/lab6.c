// soln of ordinary differentail eqn using rk-2 and rk-4 method
//rk-2 method
#include<stdio.h>
#include<conio.h>
#include<math.h>
float func(float x, float y){
    float f;
    f=(y-x)/(y+x);
    return f;
}

void main(){
int i, n;
float x0,y0,xp,h,m1,m2;
printf("enter the inital value x and y : ");
scanf("%f%f",&x0,&y0);
printf("enter the x at which y is required : ");
scanf("%f",&xp);
printf("enter the stepsize, h : ");
scanf("%f",&h);
n= (xp-x0)/h;
 printf("x\t        y\t");
for(i=1;i<=n;i++){ 

    m1=func(x0,y0);
    m2=func(x0+h,y0+m1*h);
    x0=x0+h;
    y0=y0+0.5*h*(m1+m2);
    printf("%f \t%f\n",x0,y0);

    printf("%f\t %f\t",x0,y0);
}
printf("\n value of y at x = %f is %f ",x0,y0);
getch();

}