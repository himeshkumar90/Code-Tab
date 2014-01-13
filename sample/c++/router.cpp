#include<iostream>
using namespace std;

struct root
{
  int dest[5];
  int cost[5];
  int intrm[5];
};
root *rtr[5];
int c=1,i,j,t=5;
void display()
{
     for(i=0;i<5;i++)
     {
      cout<<"Router"<<i<<":\n\n";               
     for(j=0;j<5;j++)
     cout<<rtr[i]->dest[j]<<"  "<<rtr[i]->cost[j]<<" "<<rtr[i]->intrm[j]<<"\n";
     cout<<endl;
     }
}    
void mix()
{
    while(t--)
    {
    root *temp=new root;
    for(i=0;i<5;i++)
     {
        for(j=0;j<5;j++)
        {
        if(rtr[i]->cost[j]==1)
         {
           for(int k=0;k<5;k++)
           {
             if(rtr[i]->cost[k]==16&&rtr[j]->cost[k]!=16)
             temp->cost[k]=rtr[j]->cost[k];
             else
             temp->cost[k]=(rtr[i]->cost[k])+(rtr[j]->cost[k]);                                  
             if(!((rtr[i]->cost[k]==16)&&(rtr[j]->cost[k]==16)))         
             temp->cost[k]+=1;
             if(rtr[i]->cost[k]>temp->cost[k])
             {
             rtr[i]->cost[k]=temp->cost[k];
             rtr[i]->intrm[k]=j;
             }} }} }
      delete temp;
        } }
int main()
{
   int m;
   for(int i=0;i<5;i++)
    {
      rtr[i]=new root;
      for(int j=0;j<5;j++)
      {
      rtr[i]->dest[j]=j;        
      cin>>m;
      rtr[i]->cost[j]=m;
      if(m==0||m==1)
      rtr[i]->intrm[j]=-1;
      else if(m==16)
      rtr[i]->intrm[j]=-2;
      }
    }  
  display();
  mix();
  cout<<endl<<endl;
  display();

} 
 
 
            
