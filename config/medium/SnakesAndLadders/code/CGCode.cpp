#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int width;
    int height;
    cin >> width >> height; cin.ignore();
    int n;
    cin >> n; cin.ignore();
    int snake_amount;
    int ladder_amount;
    cin >> snake_amount >> ladder_amount; cin.ignore();
    for (int i = 0; i < snake_amount; i++) {
        int head;
        int tail;
        cin >> head >> tail; cin.ignore();
    }
    for (int i = 0; i < ladder_amount; i++) {
        int top;
        int bottom;
        cin >> top >> bottom; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}