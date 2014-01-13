#include<iostream>
using namespace std;
class matrix_multiplication
{
      int a [3][3],c[3][3];
public:
void input();
void multiplication();
 

}
void input()
{
      cout <<"\t Please enter the 3x3 matrix \n";
      for(int i=0;i<3;i++)
      { for(int j=0;j<3;j++)
        cin>> a[i][j];
        }
}
void multiplication();
{
   for(int i=0;i<3;i++)
   {for(int j=0;j<3;j++)  
    { for(int k=0;k<3;k++)
     c[i][j]=c[i][j]+a[i][k]*a[k][j];
     cout<<"the matix is "<<c[i][j];
     }
     cout<<"\n";
     
}

int main()
{ matrix_multiplication obj;
  obj.input ;
  obj.multilication;
}
