#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string action;
        getline(cin, action);
    }
    int nb_orders;
    cin >> nb_orders; cin.ignore();
    for (int i = 0; i < nb_orders; i++) {
        string order;
        getline(cin, order);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}